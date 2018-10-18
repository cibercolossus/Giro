<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['adduser']);
    }
    public function isAuthorized($user)
    {
        if(isset($user['role']))
        {
            if(in_array($this->request->getParam('action'), ['home', 'view', 'logout']))
            {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
    public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
           // debug($user);
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Datos Incorrectos ó Usuario Inactivo.', ['key' => 'auth']);
            }
        }
        if ($this->Auth->user())
        {
            return $this->redirect(['action' => 'home']);
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function home()
    {
        $this->render();
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
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, ['contain' => ['Clients']]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->active = 1;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario creado con exito!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido crear el usuario, por favor intente nuevamente'));
        }
        $clients = $this->Users->Clients->find('list', ['limit' => 200]);
        $this->set(compact('user', 'clients'));
    }

    public function adduser()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role = 'Cliente';
            $user->active = 0;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario creado con exito!. espere por la activación del mismo.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('No se ha podido crear el usuario, por favor intente nuevamente.'));
        }
        $clients = $this->Users->Clients->find('list', ['limit' => 200]);
        $this->set(compact('user', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $clients = $this->Users->Clients->find('list', ['limit' => 200]);
        $this->set(compact('user', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
