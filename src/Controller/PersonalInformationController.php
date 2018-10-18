<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersonalInformation Controller
 *
 * @property \App\Model\Table\PersonalInformationTable $PersonalInformation
 *
 * @method \App\Model\Entity\PersonalInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonalInformationController extends AppController
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
        $personalInformation = $this->paginate($this->PersonalInformation);

        $this->set(compact('personalInformation'));
    }

    /**
     * View method
     *
     * @param string|null $id Personal Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalInformation = $this->PersonalInformation->get($id, [
            'contain' => ['HomeVisities', 'CountryDepartures', 'Licenses', 'MilitaryNotebooks', 'Passports']
        ]);

        $this->set('personalInformation', $personalInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalInformation = $this->PersonalInformation->newEntity();
        if ($this->request->is('post')) {
            $personalInformation = $this->PersonalInformation->patchEntity($personalInformation, $this->request->getData());
            if ($this->PersonalInformation->save($personalInformation)) {
                $this->Flash->success(__('The personal information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal information could not be saved. Please, try again.'));
        }
        $homeVisities = $this->PersonalInformation->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('personalInformation', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personal Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalInformation = $this->PersonalInformation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalInformation = $this->PersonalInformation->patchEntity($personalInformation, $this->request->getData());
            if ($this->PersonalInformation->save($personalInformation)) {
                $this->Flash->success(__('The personal information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal information could not be saved. Please, try again.'));
        }
        $homeVisities = $this->PersonalInformation->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('personalInformation', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personal Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalInformation = $this->PersonalInformation->get($id);
        if ($this->PersonalInformation->delete($personalInformation)) {
            $this->Flash->success(__('The personal information has been deleted.'));
        } else {
            $this->Flash->error(__('The personal information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
