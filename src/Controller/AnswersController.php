<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Answers Controller
 *
 * @property \App\Model\Table\AnswersTable $Answers
 *
 * @method \App\Model\Entity\Answer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnswersController extends AppController
{
    public function isAuthorized($user)
    {
        if(isset($user['role']) and ($user['role'] === 'Auditor' or $user['role'] === 'Operador'))
        {
            if(in_array($this->request->getParam('action'), ['add', 'results']))
            {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Controls']
        ];
        $answers = $this->paginate($this->Answers);

        $this->set(compact('answers'));
    }

    /**
     * View method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => ['Controls', 'Evidences']
        ]);

        $this->set('answer', $answer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       
        if ($this->request->is('post')) {
            $this->loadModel('Results');
            $this->loadModel('Inspections');
            $this->loadModel('Evidences');
            $data=[];
            $valorEncuesta = 0;
            $qty_systems  = count($this->request->getData()) -1;
            foreach ($this->request->getData() as $system => $sys) { 

                if (is_array($sys)) {
                    foreach ($sys as $component => $comp) {
                        $si=0;
                        $no=0;
                        $na=0;
                        foreach ($comp as $element => $ele) {
                            foreach ($ele as $control => $con) {
                                $answer = $this->Answers->newEntity();
                                $answer->control_id = $control;
                                $answer->answer = $con['answer'];
                                if ($this->Answers->save($answer)) {
                                    if ($con['description'] !== '') {
                                        $evidence = $this->Evidences->newEntity();
                                        $evidence->description = $con['description'];
                                        $evidence->answer_id = $answer->id;

                                        if ($con['file']['name'] !== '') {
                                            $ruta = "files/".$this->request->getData('inspection_id')."/";
                                                if (!file_exists($ruta)) {
                                                    mkdir($ruta, 0777, true);
                                                }
                                            $rutacompleta = $ruta.$con['file']['name'];
                                            /* copiamos el archivo*/
                                            if (!move_uploaded_file($con['file']['tmp_name'], $rutacompleta)) {
                                                echo "No se puedo Mover el Archivo.";
                                            }
                                        }
                                        $evidence->file = $con['file']['name'];
                                        $this->Evidences->save($evidence);
                                    }   
                                }
                                if ($con['answer']=='Si') {
                                     $si++;
                                }
                                elseif ($con['answer']=='No') {
                                    $no++;
                                }else{
                                    $na++;
                                }
                            }//Final de Controls
                        }//Final de Elements
                         $qty_questions= $si+$no+$na;

                            $results = $this->Results->newEntity();
                            $results->yes = $si;
                            $results->no = $no;
                            $results->na = $na;
                            $results->qty_question = $qty_questions;
                            $results->component_id = $component;
                            $results->inspection_id = $this->request->getData('inspection_id');
                            $this->Results->save($results);

                            $valorEncuesta = (100 / $qty_systems) / (count($sys));
                            $valorPregunta = $valorEncuesta / ($si+$no);
                            $NA = $na;
                            $gradoProtecion = $si * $valorPregunta;
                            $gradoRiesgo = $valorEncuesta - $gradoProtecion;
                            $valorTotal = $gradoProtecion + $gradoRiesgo;

                            if ($na>0 and $si>0 and $no >0) {
                                 $data[$system][$component]=[ 'vEncuesta' => $valorEncuesta, 'vPregunta' => $valorPregunta, 'N/A' =>  $NA,'gProteccion' => $gradoProtecion, 'gRiesgo' => $gradoRiesgo, 'vTotal' => $valorTotal, 'answers' => [[ 'name' => 'Si', 'y' => $si, 'sliced' => true,'selected' => true],['No', $no], ['N/A', $na]]];
                            } else if($si>0 and $no >0){
                                $data[$system][$component]=[ 'vEncuesta' => $valorEncuesta, 'vPregunta' => $valorPregunta, 'N/A' =>  $NA,'gProteccion' => $gradoProtecion, 'gRiesgo' => $gradoRiesgo, 'vTotal' => $valorTotal, 'answers' => [[ 'name' => 'Si', 'y' => $si, 'sliced' => true,'selected' => true],['No', $no]]];
                            }else if ($na>0 and $si>0) {
                                $data[$system][$component]=[ 'vEncuesta' => $valorEncuesta, 'vPregunta' => $valorPregunta, 'N/A' =>  $NA,'gProteccion' => $gradoProtecion, 'gRiesgo' => $gradoRiesgo, 'vTotal' => $valorTotal, 'answers' => [[ 'name' => 'Si', 'y' => $si, 'sliced' => true,'selected' => true],['N/A', $na]]];
                            }else if($na>0 and $no >0){
                                 $data[$system][$component]=[ 'vEncuesta' => $valorEncuesta, 'vPregunta' => $valorPregunta, 'N/A' =>  $NA,'gProteccion' => $gradoProtecion, 'gRiesgo' => $gradoRiesgo, 'vTotal' => $valorTotal, 'answers' => [[ 'name' => 'No', 'y' => $no, 'sliced' => true,'selected' => true], ['N/A', $na]]];
                            }
                           

                    }//Final de Components  
                }//Final de is_array
            }//Final de Systems
                    
                    $inspectionsTable = TableRegistry::get('Inspections');
                    $inspection = $inspectionsTable->get($this->request->getData('inspection_id')); 
                    $inspection->status = 'Finalizada.';
                    $inspectionsTable->save($inspection);

                $this->Flash->success(__('Respuestas Guardadas!.'));
                return $this->setAction('results',$data);
             
                
        }//Final de Post
            $this->Flash->error(__('No se pudo guardar las respuestas.'));
    }

    public function results($data = null)
    {
        //debug($data);
        $this->loadModel('Systems');
        $this->loadModel('Components');

        
        $results =  [];

        foreach ($data as $system => $sys) {
            $components = [];
            $syste = $this->Systems->get($system);
        

            foreach ($sys as $key => $comp) {
                $compon = $this->Components->get($key);

                $components[$compon['name']] = $comp;
            }


            $results[$syste['name']] =  $components;
        }

        $this->set('data', $results);
    }
    /**
     * Edit method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $controls = $this->Answers->Controls->find('list', ['limit' => 200]);
        $this->set(compact('answer', 'controls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answer = $this->Answers->get($id);
        if ($this->Answers->delete($answer)) {
            $this->Flash->success(__('The answer has been deleted.'));
        } else {
            $this->Flash->error(__('The answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}