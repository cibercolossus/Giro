<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Elements Controller
 *
 * @property \App\Model\Table\ElementsTable $Elements
 *
 * @method \App\Model\Entity\Element[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ElementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Components']
        ];
        $elements = $this->paginate($this->Elements);

        $this->set(compact('elements'));
    }

    /**
     * View method
     *
     * @param string|null $id Element id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
         $element = $this->Elements
            ->findBySlug($slug)
            ->contain(['Components', 'Controls'])
            ->firstOrFail();
        $this->set(compact('element'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $element = $this->Elements->newEntity();
        if ($this->request->is('post')) {
            $element = $this->Elements->patchEntity($element, $this->request->getData());
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('Elemento Guardado Exitosamente!.'));

                if ($this->request->data('redirect') !== null) {
                    return $this->redirect($this->request->data('redirect'));
                }else{
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('No se ha podido guardar el elemento, por favor intente nuevamente.'));
        }
        $components = $this->Elements->Components->find('list', ['limit' => 200]);
        $this->set(compact('element', 'components'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Element id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($slug = null)
    {
        $element = $this->Elements->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $element = $this->Elements->patchEntity($element, $this->request->getData());
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('Elemento editado exitosamente!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar este elemento, por favor intente nuevamente.'));
        }
        $components = $this->Elements->Components->find('list', ['limit' => 200]);
        $this->set(compact('element', 'components'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Element id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null)
    {
        $slug= explode(" ", $slug);
        $this->request->allowMethod(['post', 'delete']);
        $element = $this->Elements->findBySlug($slug[0])->firstOrFail();
        if ($this->Elements->delete($element)) {
            $this->Flash->success(__('Elemento Borrado con Exito!.'));
        } else {
            $this->Flash->error(__('No se ha podido borrar el elemento, por favor intente nuevamente.'));
        }
        if (isset($slug[1])) {
            return $this->redirect('/'.$slug[1].'/view/'.$slug[2]);
         } else {
             return $this->redirect(['action' => 'index']);
         } 
    }
}