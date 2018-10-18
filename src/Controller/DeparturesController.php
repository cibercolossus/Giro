<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departures Controller
 *
 * @property \App\Model\Table\DeparturesTable $Departures
 *
 * @method \App\Model\Entity\Departure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeparturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Characters']
        ];
        $departures = $this->paginate($this->Departures);

        $this->set(compact('departures'));
    }

    /**
     * View method
     *
     * @param string|null $id Departure id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departure = $this->Departures->get($id, [
            'contain' => ['Characters']
        ]);

        $this->set('departure', $departure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departure = $this->Departures->newEntity();
        if ($this->request->is('post')) {
            $departure = $this->Departures->patchEntity($departure, $this->request->getData());
            if ($this->Departures->save($departure)) {
                $this->Flash->success(__('The departure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departure could not be saved. Please, try again.'));
        }
        $characters = $this->Departures->Characters->find('list', ['limit' => 200]);
        $this->set(compact('departure', 'characters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departure = $this->Departures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departure = $this->Departures->patchEntity($departure, $this->request->getData());
            if ($this->Departures->save($departure)) {
                $this->Flash->success(__('The departure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departure could not be saved. Please, try again.'));
        }
        $characters = $this->Departures->Characters->find('list', ['limit' => 200]);
        $this->set(compact('departure', 'characters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departure = $this->Departures->get($id);
        if ($this->Departures->delete($departure)) {
            $this->Flash->success(__('The departure has been deleted.'));
        } else {
            $this->Flash->error(__('The departure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
