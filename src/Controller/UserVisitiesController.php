<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserVisities Controller
 *
 * @property \App\Model\Table\UserVisitiesTable $UserVisities
 *
 * @method \App\Model\Entity\UserVisity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserVisitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'HomeVisities']
        ];
        $userVisities = $this->paginate($this->UserVisities);

        $this->set(compact('userVisities'));
    }

    /**
     * View method
     *
     * @param string|null $id User Visity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userVisity = $this->UserVisities->get($id, [
            'contain' => ['Users', 'HomeVisities']
        ]);

        $this->set('userVisity', $userVisity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userVisity = $this->UserVisities->newEntity();
        if ($this->request->is('post')) {
            $userVisity->user_id= $this->request->getData('user_id');
            $userVisity->home_visity_id= $this->request->getData('home_visity_id');
            if ($this->UserVisities->save($userVisity)) {
                $this->Flash->success(__('The user visity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user visity could not be saved. Please, try again.'));
        }
        $users = $this->UserVisities->Users->find('list', ['conditions' => ['Users.role' => 'Visitador'],'limit' => 200]);
        $homeVisities = $this->UserVisities->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('userVisity', 'users', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Visity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userVisity = $this->UserVisities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userVisity = $this->UserVisities->patchEntity($userVisity, $this->request->getData());
            if ($this->UserVisities->save($userVisity)) {
                $this->Flash->success(__('The user visity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user visity could not be saved. Please, try again.'));
        }
        $users = $this->UserVisities->Users->find('list', ['conditions' => ['Users.role' => 'Visitador'],'limit' => 200]);
        $homeVisities = $this->UserVisities->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('userVisity', 'users', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Visity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userVisity = $this->UserVisities->get($id);
        if ($this->UserVisities->delete($userVisity)) {
            $this->Flash->success(__('The user visity has been deleted.'));
        } else {
            $this->Flash->error(__('The user visity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
