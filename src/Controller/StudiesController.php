<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Studies Controller
 *
 * @property \App\Model\Table\StudiesTable $Studies
 *
 * @method \App\Model\Entity\Study[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AcademicInformation']
        ];
        $studies = $this->paginate($this->Studies);

        $this->set(compact('studies'));
    }

    /**
     * View method
     *
     * @param string|null $id Study id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $study = $this->Studies->get($id, [
            'contain' => ['AcademicInformation']
        ]);

        $this->set('study', $study);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $study = $this->Studies->newEntity();
        if ($this->request->is('post')) {
            $study = $this->Studies->patchEntity($study, $this->request->getData());
            if ($this->Studies->save($study)) {
                $this->Flash->success(__('The study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The study could not be saved. Please, try again.'));
        }
        $academicInformation = $this->Studies->AcademicInformation->find('list', ['limit' => 200]);
        $this->set(compact('study', 'academicInformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Study id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $study = $this->Studies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $study = $this->Studies->patchEntity($study, $this->request->getData());
            if ($this->Studies->save($study)) {
                $this->Flash->success(__('The study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The study could not be saved. Please, try again.'));
        }
        $academicInformation = $this->Studies->AcademicInformation->find('list', ['limit' => 200]);
        $this->set(compact('study', 'academicInformation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Study id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $study = $this->Studies->get($id);
        if ($this->Studies->delete($study)) {
            $this->Flash->success(__('The study has been deleted.'));
        } else {
            $this->Flash->error(__('The study could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
