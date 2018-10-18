<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Photographies Controller
 *
 * @property \App\Model\Table\PhotographiesTable $Photographies
 *
 * @method \App\Model\Entity\Photography[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhotographiesController extends AppController
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
        $photographies = $this->paginate($this->Photographies);

        $this->set(compact('photographies'));
    }

    /**
     * View method
     *
     * @param string|null $id Photography id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photography = $this->Photographies->get($id, [
            'contain' => ['HomeVisities']
        ]);

        $this->set('photography', $photography);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photography = $this->Photographies->newEntity();
        if ($this->request->is('post')) {
            $photography = $this->Photographies->patchEntity($photography, $this->request->getData());
            if ($this->Photographies->save($photography)) {
                $this->Flash->success(__('The photography has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photography could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Photographies->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('photography', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photography id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photography = $this->Photographies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photography = $this->Photographies->patchEntity($photography, $this->request->getData());
            if ($this->Photographies->save($photography)) {
                $this->Flash->success(__('The photography has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photography could not be saved. Please, try again.'));
        }
        $homeVisities = $this->Photographies->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('photography', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photography id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photography = $this->Photographies->get($id);
        if ($this->Photographies->delete($photography)) {
            $this->Flash->success(__('The photography has been deleted.'));
        } else {
            $this->Flash->error(__('The photography could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
