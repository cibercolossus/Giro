<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notebooks Controller
 *
 * @property \App\Model\Table\NotebooksTable $Notebooks
 *
 * @method \App\Model\Entity\Notebook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotebooksController extends AppController
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
        $notebooks = $this->paginate($this->Notebooks);

        $this->set(compact('notebooks'));
    }

    /**
     * View method
     *
     * @param string|null $id Notebook id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notebook = $this->Notebooks->get($id, [
            'contain' => ['Characters']
        ]);

        $this->set('notebook', $notebook);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notebook = $this->Notebooks->newEntity();
        if ($this->request->is('post')) {
            $notebook = $this->Notebooks->patchEntity($notebook, $this->request->getData());
            if ($this->Notebooks->save($notebook)) {
                $this->Flash->success(__('The notebook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notebook could not be saved. Please, try again.'));
        }
        $characters = $this->Notebooks->Characters->find('list', ['limit' => 200]);
        $this->set(compact('notebook', 'characters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notebook id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notebook = $this->Notebooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notebook = $this->Notebooks->patchEntity($notebook, $this->request->getData());
            if ($this->Notebooks->save($notebook)) {
                $this->Flash->success(__('The notebook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notebook could not be saved. Please, try again.'));
        }
        $characters = $this->Notebooks->Characters->find('list', ['limit' => 200]);
        $this->set(compact('notebook', 'characters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notebook id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notebook = $this->Notebooks->get($id);
        if ($this->Notebooks->delete($notebook)) {
            $this->Flash->success(__('The notebook has been deleted.'));
        } else {
            $this->Flash->error(__('The notebook could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
