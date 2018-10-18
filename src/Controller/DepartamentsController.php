<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departaments Controller
 *
 * @property \App\Model\Table\DepartamentsTable $Departaments
 *
 * @method \App\Model\Entity\Departament[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartamentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $departaments = $this->paginate($this->Departaments);

        $this->set(compact('departaments'));
    }

    /**
     * View method
     *
     * @param string|null $id Departament id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departament = $this->Departaments->get($id, [
            'contain' => ['Municipalities', 'Sectors']
        ]);

        $this->set('departament', $departament);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departament = $this->Departaments->newEntity();
        if ($this->request->is('post')) {
            $departament = $this->Departaments->patchEntity($departament, $this->request->getData());
            if ($this->Departaments->save($departament)) {
                $this->Flash->success(__('The departament has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departament could not be saved. Please, try again.'));
        }
        $this->set(compact('departament'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departament id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departament = $this->Departaments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departament = $this->Departaments->patchEntity($departament, $this->request->getData());
            if ($this->Departaments->save($departament)) {
                $this->Flash->success(__('The departament has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departament could not be saved. Please, try again.'));
        }
        $this->set(compact('departament'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departament id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departament = $this->Departaments->get($id);
        if ($this->Departaments->delete($departament)) {
            $this->Flash->success(__('The departament has been deleted.'));
        } else {
            $this->Flash->error(__('The departament could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
