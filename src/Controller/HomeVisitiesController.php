<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * HomeVisities Controller
 *
 * @property \App\Model\Table\HomeVisitiesTable $HomeVisities
 *
 * @method \App\Model\Entity\HomeVisity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeVisitiesController extends AppController
{
 

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['select']);
    }
    public function isAuthorized($user)
    {
        
        if(isset($user['role']) and $user['role'] === 'Operador')
        {
            if(in_array($this->request->getParam('action'), ['add', 'index', 'manage', 'finish', 'viewvisit', 'editvisit', 'post']))
            {
                return true;
            }
        }
        if(isset($user['role']) and $user['role'] === 'Cliente')
        {
            if(in_array($this->request->getParam('action'), ['add', 'index']))
            {
                return true;
            }
            if(in_array($this->request->getParam('action'), ['edit', 'view']))
            {
                $visitId = (int)$this->request->getParam('pass.0');
                if ($this->HomeVisities->isOwnedBy($visitId, $user['id'])) {
                        return true;
                }
            }
        }
        if(isset($user['role']) and $user['role'] === 'Visitador')
        {
            if(in_array($this->request->getParam('action'), ['index', 'startvisit', 'addvisit']))
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

        if ($this->Auth->user('role')  === 'SuperAdministrador' or $this->Auth->user('role')  === 'Administrador'  or $this->Auth->user('role')  === 'Operador') {
            $this->paginate = ['contain' => ['Users', 'Clients']];
            $homeVisities = $this->paginate($this->HomeVisities);
        }else if ($this->Auth->user('role')  === 'Cliente') {
            $this->paginate = [
                            'conditions' => ['HomeVisities.user_id' => $this->Auth->user('id')],
                            'contain' => ['Clients']];
            $homeVisities = $this->paginate($this->HomeVisities);
        }elseif ($this->Auth->user('role')  === 'Visitador') {

            $query = $this->HomeVisities->find()->innerJoinWith(
                                'UserVisities', function ($q) {
                                    return $q->where(['UserVisities.user_id' => $this->Auth->user('id')]);
                                }
                                );
        
            $homeVisities= $this->paginate($query);
        }
        $this->set(compact('homeVisities'));
    }

    /**
     * View method
     *
     * @param string|null $id Home Visity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => ['Users', 'Clients']
        ]);

        $this->set('homeVisity', $homeVisity);
    }

    public function startvisit($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => []
        ]);
    
        $this->loadModel('Departaments');
        $this->loadModel('Municipalities');
        $departaments = $this->Departaments->find('list'); 
        $municipalities = $this->Municipalities->find('list'); 
        $this->set(compact('homeVisity', 'departaments', 'municipalities'));
    }
    
    public function viewvisit($id = null)
    {

        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => ['Characters', 'Characters.Licenses','Characters.Notebooks', 'Characters.Passports', 'Characters.Departures', 'AcademicInformation','AcademicInformation.Studies', 'Families','Families.Relatives','Families.CloseRelatives' ]
        ]);
        
        //$this->viewBuilder()->setClassName('CakePdf.Pdf');
        $this->viewBuilder()->setOptions([
            'pdfConfig' => [
                'download' => false // This can be omitted if "filename" is specified.
                
            ]
        ]);
        $this->set('homeVisity', $homeVisity);

    }

    public function addvisit()
    {
       // debug($this->request->getData());
        
        if ($this->request->is(['patch', 'post', 'put'])) {
     
            $homeVisity = $this->HomeVisities->get($this->request->getData('id'), ['contain' => []]);
            $homeVisity = $this->HomeVisities->patchEntity($homeVisity, $this->request->getData(), ['associated' => ['Characters', 'Characters.Licenses','Characters.Notebooks', 'Characters.Passports', 'Characters.Departures', 'AcademicInformation','AcademicInformation.Studies', 'Families','Families.Relatives','Families.CloseRelatives' ]]);
            //$this->HomeVisities->save($homeVisity);
           // debug($homeVisity);
           if ($this->HomeVisities->save($homeVisity)) {
                    $homeVisity = $this->HomeVisities->get($this->request->getData('id'));
                    $homeVisity->status = 'Terminada';
                   
                    if ($this->HomeVisities->save($homeVisity)) {
                    $this->Flash->success(__('Visita Terminada!.'));
                    return $this->redirect(['action' => 'index']);
                    }
            }
        }  
    }

    public function add()
    {
        $homeVisity = $this->HomeVisities->newEntity();
            if ($this->request->is('post')) {
        
                    $homeVisity = $this->HomeVisities->patchEntity($homeVisity, $this->request->getData());
                    $homeVisity->code= date('ymdms');
                    $homeVisity->status= 'Iniciada';
                    if ($this->Auth->user('role')  === 'Cliente') {
                        $homeVisity->user_id= $this->Auth->user('id');
                        $homeVisity->client_id= $this->Auth->user('client_id');
                    }
                    if ($this->HomeVisities->save($homeVisity)) {
                        $this->Flash->success(__('Visita Domiciliaria Iniciada!.'));
                        return $this->redirect(['action' => 'index']);
                    }       
                
                $this->Flash->error(__('No se pudo Iniciar Visita Domiciliaria, por favor intente nuevamente.'));
                }

        $users = $this->HomeVisities->Users->find('list', ['limit' => 200]);
        $clients = $this->HomeVisities->Clients->find('list', ['limit' => 200]);
        $this->set(compact('homeVisity', 'users', 'clients'));
    }
   
    /**
     * Edit method
     *
     * @param string|null $id Home Visity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $homeVisity = $this->HomeVisities->patchEntity($homeVisity, $this->request->getData());
            if ($this->Auth->user('role')  === 'Cliente') {
                $homeVisity->user_id= $this->Auth->user('id');
                $homeVisity->client_id= $this->Auth->user('client_id');   
            }
            if ($this->HomeVisities->save($homeVisity)) {
                $this->Flash->success(__('Visita Actualizada Correctamente!.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('No se ha podido Actualizar la Visita, por favor intente nuevamente.'));
        }
        $users = $this->HomeVisities->Users->find('list', ['limit' => 200]);
        $clients = $this->HomeVisities->Clients->find('list', ['limit' => 200]);
        $this->set(compact('homeVisity', 'users', 'clients'));
    }
    public function editvisit($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => ['Characters', 'Characters.Licenses','Characters.Notebooks', 'Characters.Passports', 'Characters.Departures', 'AcademicInformation','AcademicInformation.Studies', 'Families','Families.Relatives','Families.CloseRelatives' ]
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $homeVisity = $this->HomeVisities->patchEntity($homeVisity, $this->request->getData());
          
                $this->Flash->success(__('Visita Actualizada Correctamente!.'));
                return $this->redirect(['action' => 'index']);

            $this->Flash->error(__('No se ha podido Actualizar la Visita, por favor intente nuevamente.'));
        }

        $this->set(compact('homeVisity'));
    }

    public function manage($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id, [
            'contain' => ['Users', 'Clients']
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->loadModel('UserVisities');
            $homeVisity->status = 'En Proceso';
            
            $userVisity = $this->UserVisities->newEntity();
            $userVisity->user_id = $this->request->getData('user_id');
            $userVisity->home_visity_id = $this->request->getData('home_visity_id');

            if ($this->UserVisities->save($userVisity)) {
                if ($this->HomeVisities->save($homeVisity)) {
                    $this->Flash->success(__('Visita Gestionada Correctamente!.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('No se ha podido Gestionar la Visita, por favor intente nuevamente.'));
        }
        $visitors = $this->HomeVisities->Users->find('list', ['conditions' => ['Users.role =' => 'Visitador'],'limit' => 200]);
        $this->set(compact('homeVisity', 'visitors'));
    }

    public function finish($id = null)
    {
        $homeVisity = $this->HomeVisities->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeVisity->status = 'Disponible';
        
            if ($this->HomeVisities->save($homeVisity)) {
                $this->Flash->success(__('Visita Publicada Correctamente!.'));
                return $this->redirect(['action' => 'index']);
                
            }

            $this->Flash->error(__('No se ha podido Gestionar la Visita, por favor intente nuevamente.'));
        }

    }
 
    /**
     * Delete method
     *
     * @param string|null $id Home Visity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeVisity = $this->HomeVisities->get($id);
        if ($this->HomeVisities->delete($homeVisity)) {
            $this->Flash->success(__('Visita Domiciliaria Borrada con Exito!.'));
        } else {
            $this->Flash->error(__('No se pudo borrar la Visita Domiciliaria, por favor intente nuevamente  .'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function select() {
        $this->request->allowMethod('ajax');
        $id = $this->request->query('id');
        if (!$id) {
            throw new NotFoundException();
        }

        $this->viewBuilder()->className('Ajax.Ajax');

        $this->loadModel('Municipalities');
        $municipalities = $this->Municipalities->getListByDepartament($id);

        $this->set(compact('states'));
    }
    
}