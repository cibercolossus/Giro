<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Characters Controller
 *
 * @property \App\Model\Table\CharactersTable $Characters
 *
 * @method \App\Model\Entity\Character[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CharactersController extends AppController
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
        $characters = $this->paginate($this->Characters);

        $this->set(compact('characters'));
    }

    /**
     * View method
     *
     * @param string|null $id Character id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $character = $this->Characters->get($id, [
            'contain' => ['HomeVisities', 'Departures', 'Licenses', 'Notebooks', 'Passports']
        ]);

        $this->set('character', $character);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $character = $this->Characters->newEntity();
        if ($this->request->is('post')) {
            $character = $this->Characters->patchEntity($character, $this->request->getData());
            if ($this->Characters->save($character)) {
                $this->Flash->success(__('The character has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The character could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Characters->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('character', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Character id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $character = $this->Characters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $character = $this->Characters->patchEntity($character, $this->request->getData());
            if ($this->Characters->save($character)) {
                $this->Flash->success(__('The character has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The character could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Characters->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('character', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Character id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $character = $this->Characters->get($id);
        if ($this->Characters->delete($character)) {
            $this->Flash->success(__('The character has been deleted.'));
        } else {
            $this->Flash->error(__('The character could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
