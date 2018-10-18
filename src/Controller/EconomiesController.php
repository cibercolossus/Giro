<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Economies Controller
 *
 * @property \App\Model\Table\EconomiesTable $Economies
 *
 * @method \App\Model\Entity\Economy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EconomiesController extends AppController
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
        $economies = $this->paginate($this->Economies);

        $this->set(compact('economies'));
    }

    /**
     * View method
     *
     * @param string|null $id Economy id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $economy = $this->Economies->get($id, [
            'contain' => ['HomeVisities', 'BankAccounts', 'Expenses', 'Income']
        ]);

        $this->set('economy', $economy);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $economy = $this->Economies->newEntity();
        if ($this->request->is('post')) {
            $economy = $this->Economies->patchEntity($economy, $this->request->getData());
            if ($this->Economies->save($economy)) {
                $this->Flash->success(__('The economy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The economy could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Economies->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('economy', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Economy id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $economy = $this->Economies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $economy = $this->Economies->patchEntity($economy, $this->request->getData());
            if ($this->Economies->save($economy)) {
                $this->Flash->success(__('The economy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The economy could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Economies->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('economy', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Economy id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $economy = $this->Economies->get($id);
        if ($this->Economies->delete($economy)) {
            $this->Flash->success(__('The economy has been deleted.'));
        } else {
            $this->Flash->error(__('The economy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
