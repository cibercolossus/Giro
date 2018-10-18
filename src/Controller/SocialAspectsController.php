<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SocialAspects Controller
 *
 * @property \App\Model\Table\SocialAspectsTable $SocialAspects
 *
 * @method \App\Model\Entity\SocialAspect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialAspectsController extends AppController
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
        $socialAspects = $this->paginate($this->SocialAspects);

        $this->set(compact('socialAspects'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Aspect id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialAspect = $this->SocialAspects->get($id, [
            'contain' => ['HomeVisities']
        ]);

        $this->set('socialAspect', $socialAspect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialAspect = $this->SocialAspects->newEntity();
        if ($this->request->is('post')) {
            $socialAspect = $this->SocialAspects->patchEntity($socialAspect, $this->request->getData());
            if ($this->SocialAspects->save($socialAspect)) {
                $this->Flash->success(__('The social aspect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social aspect could not be saved. Please, try again.'));
        }
        $homeVisities = $this->SocialAspects->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('socialAspect', 'homeVisities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Aspect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialAspect = $this->SocialAspects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialAspect = $this->SocialAspects->patchEntity($socialAspect, $this->request->getData());
            if ($this->SocialAspects->save($socialAspect)) {
                $this->Flash->success(__('The social aspect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social aspect could not be saved. Please, try again.'));
        }
        $homeVisities = $this->SocialAspects->HomeVisities->find('list', ['limit' => 200]);
        $this->set(compact('socialAspect', 'homeVisities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Aspect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialAspect = $this->SocialAspects->get($id);
        if ($this->SocialAspects->delete($socialAspect)) {
            $this->Flash->success(__('The social aspect has been deleted.'));
        } else {
            $this->Flash->error(__('The social aspect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
