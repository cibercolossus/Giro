<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MilitaryNotebooks Controller
 *
 * @property \App\Model\Table\MilitaryNotebooksTable $MilitaryNotebooks
 *
 * @method \App\Model\Entity\MilitaryNotebook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MilitaryNotebooksController extends AppController
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
        $militaryNotebooks = $this->paginate($this->MilitaryNotebooks);

        $this->set(compact('militaryNotebooks'));
    }

    /**
     * View method
     *
     * @param string|null $id Military Notebook id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $militaryNotebook = $this->MilitaryNotebooks->get($id, [
            'contain' => ['PersonalInformation']
        ]);

        $this->set('militaryNotebook', $militaryNotebook);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $militaryNotebook = $this->MilitaryNotebooks->newEntity();
        if ($this->request->is('post')) {
            $militaryNotebook = $this->MilitaryNotebooks->patchEntity($militaryNotebook, $this->request->getData());
            if ($this->MilitaryNotebooks->save($militaryNotebook)) {
                $this->Flash->success(__('The military notebook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The military notebook could not be saved. Please, try again.'));
        }
        $personalInformation = $this->MilitaryNotebooks->PersonalInformation->find('list', ['limit' => 200]);
        $this->set(compact('militaryNotebook', 'personalInformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Military Notebook id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $militaryNotebook = $this->MilitaryNotebooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $militaryNotebook = $this->MilitaryNotebooks->patchEntity($militaryNotebook, $this->request->getData());
            if ($this->MilitaryNotebooks->save($militaryNotebook)) {
                $this->Flash->success(__('The military notebook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The military notebook could not be saved. Please, try again.'));
        }
        $personalInformation = $this->MilitaryNotebooks->PersonalInformation->find('list', ['limit' => 200]);
        $this->set(compact('militaryNotebook', 'personalInformation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Military Notebook id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $militaryNotebook = $this->MilitaryNotebooks->get($id);
        if ($this->MilitaryNotebooks->delete($militaryNotebook)) {
            $this->Flash->success(__('The military notebook has been deleted.'));
        } else {
            $this->Flash->error(__('The military notebook could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
