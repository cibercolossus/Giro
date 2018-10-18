<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CloseRelatives Controller
 *
 * @property \App\Model\Table\CloseRelativesTable $CloseRelatives
 *
 * @method \App\Model\Entity\CloseRelative[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CloseRelativesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Families']
        ];
        $closeRelatives = $this->paginate($this->CloseRelatives);

        $this->set(compact('closeRelatives'));
    }

    /**
     * View method
     *
     * @param string|null $id Close Relative id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $closeRelative = $this->CloseRelatives->get($id, [
            'contain' => ['Families']
        ]);

        $this->set('closeRelative', $closeRelative);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $closeRelative = $this->CloseRelatives->newEntity();
        if ($this->request->is('post')) {
            $closeRelative = $this->CloseRelatives->patchEntity($closeRelative, $this->request->getData());
            if ($this->CloseRelatives->save($closeRelative)) {
                $this->Flash->success(__('The close relative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The close relative could not be saved. Please, try again.'));
        }
        $families = $this->CloseRelatives->Families->find('list', ['limit' => 200]);
        $this->set(compact('closeRelative', 'families'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Close Relative id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $closeRelative = $this->CloseRelatives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $closeRelative = $this->CloseRelatives->patchEntity($closeRelative, $this->request->getData());
            if ($this->CloseRelatives->save($closeRelative)) {
                $this->Flash->success(__('The close relative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The close relative could not be saved. Please, try again.'));
        }
        $families = $this->CloseRelatives->Families->find('list', ['limit' => 200]);
        $this->set(compact('closeRelative', 'families'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Close Relative id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $closeRelative = $this->CloseRelatives->get($id);
        if ($this->CloseRelatives->delete($closeRelative)) {
            $this->Flash->success(__('The close relative has been deleted.'));
        } else {
            $this->Flash->error(__('The close relative could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
