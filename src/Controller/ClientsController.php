<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{
    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'Comercial')
        {
            if(in_array($this->request->getParam('action'), ['add', 'index', 'edit', 'view']))
            {
                return true;
            }
        }
        if(isset($user['role']) and $user['role'] === 'Operador' )
        {
            if(in_array($this->request->getParam('action'), ['add', 'index', 'view', 'delete', 'edit']))
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
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $client = $this->Clients
            ->findBySlug($slug)
            ->contain(['Inspections'])
            ->firstOrFail();
        $this->set(compact('client'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('Cliente creado exitosamente!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido crear el cliente, por favor intente nuevammente.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($slug = null)
    {
        $client = $this->Clients->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('Cliente editado con exito!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar al cliente, por favor intente nuevamente.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->findBySlug($slug)->firstOrFail();
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('Cliente borrado con exito!.'));
        } else {
            $this->Flash->error(__('No se ha podido borrar el cliente, por favor intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}