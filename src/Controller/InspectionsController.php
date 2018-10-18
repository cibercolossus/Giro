<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inspections Controller
 *
 * @property \App\Model\Table\InspectionsTable $Inspections
 *
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InspectionsController extends AppController
{
    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'Auditor' )
        {
            if(in_array($this->request->getParam('action'), ['add', 'index', 'view', 'start']))
            {
                return true;
            }
        }
        if(isset($user['role']) and $user['role'] === 'Operador' )
        {
            if(in_array($this->request->getParam('action'), ['add', 'index', 'view', 'start', 'delete', 'edit']))
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
            'contain' => ['Clients']
        ];
        $inspections = $this->paginate($this->Inspections);

        $this->set(compact('inspections'));
    }

    /**
     * View method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inspection = $this->Inspections->get($id, [
            'contain' => ['Clients', 'Results.Components']
        ]);

        $this->set('inspection', $inspection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
   public function add()
    {
        $inspection = $this->Inspections->newEntity();
        if ($this->request->is('post')) {
            $inspection->status = 'En proceso...';
            $inspection->client_id = $this->request->getData('client_id');
            if ($this->Inspections->save($inspection)) {
                $this->Flash->success(__('Inspección Iniciada.'));

                return $this->setAction('start', $this->request->getData(), $inspection->id );
            }
            $this->Flash->error(__('No se pudo iniciar inspección, por favor intente nuevamente.'));
        }

        $this->loadModel('Systems');
        $systems = $this->Systems->find('all', ['contain' => ['components']]);
        $clients = $this->Inspections->Clients->find('list', ['limit' => 200]);
        $this->set(compact('systems', 'inspection','clients'));
    }

    public function start($inspection = null, $inspection_id = null)
    {
       // debug($inspection);
        $this->loadModel('Systems');
        $this->loadModel('Components');

        $systems = [];

        foreach ($inspection as $key => $val) {

            if (is_array($val)) {
            $components =  [];
        
            $system = $this->Systems->get($key);
      
            foreach ($val as $sub) {
                    $component =  $this->Components->get($sub, ['contain' => ['elements.controls']]);
                    $components[]= ['id' => $component['id'], 'name' => $component['name'],'elements' => $component['elements']];
                }

                array_push($systems ,['id' => $system['id'], 'name' => $system['name'], 'components' => $components]);
            }
        }

       $this->set(compact('systems', 'inspection_id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inspection = $this->Inspections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inspection = $this->Inspections->patchEntity($inspection, $this->request->getData());
            if ($this->Inspections->save($inspection)) {
                $this->Flash->success(__('The inspection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inspection could not be saved. Please, try again.'));
        }
        $clients = $this->Inspections->Clients->find('list', ['limit' => 200]);
        $this->set(compact('inspection', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inspection = $this->Inspections->get($id);
        if ($this->Inspections->delete($inspection)) {
            $this->Flash->success(__('The inspection has been deleted.'));
        } else {
            $this->Flash->error(__('The inspection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
