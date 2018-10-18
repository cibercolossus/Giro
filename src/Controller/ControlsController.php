<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controls Controller
 *
 * @property \App\Model\Table\ControlsTable $Controls
 *
 * @method \App\Model\Entity\Control[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ControlsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Elements']
        ];
        $controls = $this->paginate($this->Controls);

        $this->set(compact('controls'));
    }

    /**
     * View method
     *
     * @param string|null $id Control id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $control = $this->Controls
            ->findBySlug($slug)
            ->contain(['Elements'])
            ->firstOrFail();
        $this->set(compact('control'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $control = $this->Controls->newEntity();
        if ($this->request->is('post')) {
            $control = $this->Controls->patchEntity($control, $this->request->getData());
            if ($this->Controls->save($control)) {
                $this->Flash->success(__('Control guardado exitosamente!.'));

                if ($this->request->data('redirect') !== null) {
                    return $this->redirect($this->request->data('redirect'));
                }else{
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('No se ha podido guardar este control, por favor intente nuevamente.'));
        }
        $elements = $this->Controls->Elements->find('list', ['limit' => 200]);
        $this->set(compact('control', 'elements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Control id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($slug = null)
    {
        $control = $this->Controls->findBySlug($slug)->firstOrFail();
     
        if ($this->request->is(['patch', 'post', 'put'])) {
            $control = $this->Controls->patchEntity($control, $this->request->getData());
            if ($this->Controls->save($control)) {
                $this->Flash->success(__('Control editado exitosamente.!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar el control, por favor intente nuevamente.'));
        }
        $elements = $this->Controls->Elements->find('list', ['limit' => 200]);
        $this->set(compact('control', 'elements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Control id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null)
    {
        $slug= explode(" ", $slug);
        $this->request->allowMethod(['post', 'delete']);
        $control = $this->Controls->findBySlug($slug[0])->firstOrFail();
        if ($this->Controls->delete($control)) {
            $this->Flash->success(__('Control borrado con exito!.'));
        } else {
            $this->Flash->error(__('No se ha podido borrar el control, por favor intente nuevamente.'));
        }
        
        if (isset($slug[1])) {
            return $this->redirect('/'.$slug[1].'/view/'.$slug[2]);
         } else {
             return $this->redirect(['action' => 'index']);
         } 
    }
}