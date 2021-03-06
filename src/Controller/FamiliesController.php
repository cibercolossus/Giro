<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Families Controller
 *
 * @property \App\Model\Table\FamiliesTable $Families
 *
 * @method \App\Model\Entity\Family[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FamiliesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HomeVisities']
        ];
        $families = $this->paginate($this->Families);

        $this->set(compact('families'));
    }

    /**
     * View method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $family = $this->Families->get($id, [
            'contain' => ['HomeVisities', 'CloseRelatives', 'Relatives']
        ]);

        $this->set('family', $family);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $family = $this->Families->newEntity();
        if ($this->request->is('post')) {
            $family = $this->Families->patchEntity($family, $this->request->getData());
            if ($this->Families->save($family)) {
                $this->Flash->success(__('The family has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Families->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('family', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $family = $this->Families->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $family = $this->Families->patchEntity($family, $this->request->getData());
            if ($this->Families->save($family)) {
                $this->Flash->success(__('The family has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Families->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('family', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $family = $this->Families->get($id);
        if ($this->Families->delete($family)) {
            $this->Flash->success(__('The family has been deleted.'));
        } else {
            $this->Flash->error(__('The family could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
