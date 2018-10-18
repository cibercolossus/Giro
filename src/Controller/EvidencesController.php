<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evidences Controller
 *
 * @property \App\Model\Table\EvidencesTable $Evidences
 *
 * @method \App\Model\Entity\Evidence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EvidencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Answers']
        ];
        $evidences = $this->paginate($this->Evidences);

        $this->set(compact('evidences'));
    }

    /**
     * View method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidence = $this->Evidences->get($id, [
            'contain' => ['Answers']
        ]);

        $this->set('evidence', $evidence);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidence = $this->Evidences->newEntity();
        if ($this->request->is('post')) {
            $evidence = $this->Evidences->patchEntity($evidence, $this->request->getData());
            if ($this->Evidences->save($evidence)) {
                $this->Flash->success(__('The evidence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evidence could not be saved. Please, try again.'));
        }
        $answers = $this->Evidences->Answers->find('list', ['limit' => 200]);
        $this->set(compact('evidence', 'answers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidence = $this->Evidences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidence = $this->Evidences->patchEntity($evidence, $this->request->getData());
            if ($this->Evidences->save($evidence)) {
                $this->Flash->success(__('The evidence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evidence could not be saved. Please, try again.'));
        }
        $answers = $this->Evidences->Answers->find('list', ['limit' => 200]);
        $this->set(compact('evidence', 'answers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidence = $this->Evidences->get($id);
        if ($this->Evidences->delete($evidence)) {
            $this->Flash->success(__('The evidence has been deleted.'));
        } else {
            $this->Flash->error(__('The evidence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
