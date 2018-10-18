<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Relatives Controller
 *
 * @property \App\Model\Table\RelativesTable $Relatives
 *
 * @method \App\Model\Entity\Relative[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RelativesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Families']
        ];
        $relatives = $this->paginate($this->Relatives);

        $this->set(compact('relatives'));
    }

    /**
     * View method
     *
     * @param string|null $id Relative id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relative = $this->Relatives->get($id, [
            'contain' => ['Families']
        ]);

        $this->set('relative', $relative);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relative = $this->Relatives->newEntity();
        if ($this->request->is('post')) {
            $relative = $this->Relatives->patchEntity($relative, $this->request->getData());
            if ($this->Relatives->save($relative)) {
                $this->Flash->success(__('The relative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relative could not be saved. Please, try again.'));
        }
        $families = $this->Relatives->Families->find('list', ['limit' => 200]);
        $this->set(compact('relative', 'families'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Relative id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relative = $this->Relatives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relative = $this->Relatives->patchEntity($relative, $this->request->getData());
            if ($this->Relatives->save($relative)) {
                $this->Flash->success(__('The relative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relative could not be saved. Please, try again.'));
        }
        $families = $this->Relatives->Families->find('list', ['limit' => 200]);
        $this->set(compact('relative', 'families'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Relative id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relative = $this->Relatives->get($id);
        if ($this->Relatives->delete($relative)) {
            $this->Flash->success(__('The relative has been deleted.'));
        } else {
            $this->Flash->error(__('The relative could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
