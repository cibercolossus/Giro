<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Passports Controller
 *
 * @property \App\Model\Table\PassportsTable $Passports
 *
 * @method \App\Model\Entity\Passport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PassportsController extends AppController
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
        $passports = $this->paginate($this->Passports);

        $this->set(compact('passports'));
    }

    /**
     * View method
     *
     * @param string|null $id Passport id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $passport = $this->Passports->get($id, [
            'contain' => ['Characters']
        ]);

        $this->set('passport', $passport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $passport = $this->Passports->newEntity();
        if ($this->request->is('post')) {
            $passport = $this->Passports->patchEntity($passport, $this->request->getData());
            if ($this->Passports->save($passport)) {
                $this->Flash->success(__('The passport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The passport could not be saved. Please, try again.'));
        }
        $characters = $this->Passports->Characters->find('list', ['limit' => 200]);
        $this->set(compact('passport', 'characters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Passport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $passport = $this->Passports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $passport = $this->Passports->patchEntity($passport, $this->request->getData());
            if ($this->Passports->save($passport)) {
                $this->Flash->success(__('The passport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The passport could not be saved. Please, try again.'));
        }
        $characters = $this->Passports->Characters->find('list', ['limit' => 200]);
        $this->set(compact('passport', 'characters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Passport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $passport = $this->Passports->get($id);
        if ($this->Passports->delete($passport)) {
            $this->Flash->success(__('The passport has been deleted.'));
        } else {
            $this->Flash->error(__('The passport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
