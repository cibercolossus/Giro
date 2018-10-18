<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AcademicInformation Controller
 *
 * @property \App\Model\Table\AcademicInformationTable $AcademicInformation
 *
 * @method \App\Model\Entity\AcademicInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademicInformationController extends AppController
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
        $academicInformation = $this->paginate($this->AcademicInformation);

        $this->set(compact('academicInformation'));
    }

    /**
     * View method
     *
     * @param string|null $id Academic Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academicInformation = $this->AcademicInformation->get($id, [
            'contain' => ['HomeVisities', 'Studies']
        ]);

        $this->set('academicInformation', $academicInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicInformation = $this->AcademicInformation->newEntity();
        if ($this->request->is('post')) {
            $academicInformation = $this->AcademicInformation->patchEntity($academicInformation, $this->request->getData());
            if ($this->AcademicInformation->save($academicInformation)) {
                $this->Flash->success(__('The academic information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic information could not be saved. Please, try again.'));
        }
        $homeVisities = $this->AcademicInformation->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('academicInformation', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicInformation = $this->AcademicInformation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicInformation = $this->AcademicInformation->patchEntity($academicInformation, $this->request->getData());
            if ($this->AcademicInformation->save($academicInformation)) {
                $this->Flash->success(__('The academic information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic information could not be saved. Please, try again.'));
        }
        $homeVisities = $this->AcademicInformation->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('academicInformation', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicInformation = $this->AcademicInformation->get($id);
        if ($this->AcademicInformation->delete($academicInformation)) {
            $this->Flash->success(__('The academic information has been deleted.'));
        } else {
            $this->Flash->error(__('The academic information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
