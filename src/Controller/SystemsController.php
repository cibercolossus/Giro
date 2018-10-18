<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Systems Controller
 *
 * @property \App\Model\Table\SystemsTable $Systems
 *
 * @method \App\Model\Entity\System[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SystemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $systems = $this->paginate($this->Systems);

        $this->set(compact('systems'));
    }

    /**
     * View method
     *
     * @param string|null $id System id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {   
        $system = $this->Systems
            ->findBySlug($slug)
            ->contain(['Components'])
            ->firstOrFail();
        $this->set(compact('system'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $system = $this->Systems->newEntity();
        if ($this->request->is('post')) {
            $system = $this->Systems->patchEntity($system, $this->request->getData());
            if ($this->Systems->save($system)) {
                $this->Flash->success(__('Sistema guardado con exito!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se puedo guardar el sistema, por favor intente nuevamente.'));
        }
        $this->set(compact('system'));
    }

    /**
     * Edit method
     *
     * @param string|null $id System id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($slug = null)
    {
        $system = $this->Systems->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $system = $this->Systems->patchEntity($system, $this->request->getData());
            if ($this->Systems->save($system)) {
                $this->Flash->success(__('sistema editado correctamente!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo editar el sistema, por favor intente nuevamente.'));
        }
        $this->set(compact('system'));
    }

    /**
     * Delete method
     *
     * @param string|null $id System id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $system = $this->Systems->findBySlug($slug)->firstOrFail();
        if ($this->Systems->delete($system)) {
            $this->Flash->success(__('Sistema borrado con exito!.'));
        } else {
            $this->Flash->error(__('No se ha podido borrar el sistema, por favor intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}