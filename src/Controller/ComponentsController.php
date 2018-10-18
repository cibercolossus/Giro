<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Components Controller
 *
 * @property \App\Model\Table\ComponentsTable $Components
 *
 * @method \App\Model\Entity\Component[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComponentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Systems']
        ];
        $components = $this->paginate($this->Components);

        $this->set(compact('components'));
    }

    /**
     * View method
     *
     * @param string|null $id Component id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $component = $this->Components
            ->findBySlug($slug)
            ->contain(['Systems', 'Elements'])
            ->firstOrFail();
        $this->set(compact('component'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $component = $this->Components->newEntity();
        if ($this->request->is('post')) {
            $component = $this->Components->patchEntity($component, $this->request->getData());
            if ($this->Components->save($component)) {
                $this->Flash->success(__('Componente guardado exitosamente!.'));
                if ($this->request->data('redirect') !== null) {
                    return $this->redirect($this->request->data('redirect'));
                }else{
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('No se pudo guardar el componente, por favor intente nuevamente.'));
        }
        $systems = $this->Components->Systems->find('list', ['limit' => 200]);
        $this->set(compact('component', 'systems'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Component id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($slug = null)
    {   
        $component = $this->Components->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $component = $this->Components->patchEntity($component, $this->request->getData());
            if ($this->Components->save($component)) {
                $this->Flash->success(__('Componente editado exitosamente!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar el componente, por favor intente nuevamente.'));
        }
        $systems = $this->Components->Systems->find('list', ['limit' => 200]);
        $this->set(compact('component', 'systems'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Component id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null)
    {
        $slug= explode(" ", $slug);
        $this->request->allowMethod(['post', 'delete']);
        $component = $this->Components->findBySlug($slug[0])->firstOrFail();
        if ($this->Components->delete($component)) {
            $this->Flash->success(__('Componente borrado con exito!.'));
        } else {
            $this->Flash->error(__('No se ha podido borrar componente, por favor intente nuevamente.'));
        }
        if (isset($slug[1])) {
            return $this->redirect('/'.$slug[1].'/view/'.$slug[2]);
         } else {
             return $this->redirect(['action' => 'index']);
         } 
        return $this->redirect(['action' => 'index']);
    }
}