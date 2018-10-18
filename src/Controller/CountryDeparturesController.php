<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CountryDepartures Controller
 *
 * @property \App\Model\Table\CountryDeparturesTable $CountryDepartures
 *
 * @method \App\Model\Entity\CountryDeparture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CountryDeparturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PersonalInformation']
        ];
        $countryDepartures = $this->paginate($this->CountryDepartures);

        $this->set(compact('countryDepartures'));
    }

    /**
     * View method
     *
     * @param string|null $id Country Departure id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $countryDeparture = $this->CountryDepartures->get($id, [
            'contain' => ['PersonalInformation']
        ]);

        $this->set('countryDeparture', $countryDeparture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $countryDeparture = $this->CountryDepartures->newEntity();
        if ($this->request->is('post')) {
            $countryDeparture = $this->CountryDepartures->patchEntity($countryDeparture, $this->request->getData());
            if ($this->CountryDepartures->save($countryDeparture)) {
                $this->Flash->success(__('The country departure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country departure could not be saved. Please, try again.'));
        }
        $personalInformation = $this->CountryDepartures->PersonalInformation->find('list', ['limit' => 200]);
        $this->set(compact('countryDeparture', 'personalInformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Country Departure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $countryDeparture = $this->CountryDepartures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $countryDeparture = $this->CountryDepartures->patchEntity($countryDeparture, $this->request->getData());
            if ($this->CountryDepartures->save($countryDeparture)) {
                $this->Flash->success(__('The country departure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country departure could not be saved. Please, try again.'));
        }
        $personalInformation = $this->CountryDepartures->PersonalInformation->find('list', ['limit' => 200]);
        $this->set(compact('countryDeparture', 'personalInformation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Country Departure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $countryDeparture = $this->CountryDepartures->get($id);
        if ($this->CountryDepartures->delete($countryDeparture)) {
            $this->Flash->success(__('The country departure has been deleted.'));
        } else {
            $this->Flash->error(__('The country departure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
