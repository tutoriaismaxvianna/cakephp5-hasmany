<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SocialNetworks Controller
 *
 * @property \App\Model\Table\SocialNetworksTable $SocialNetworks
 */
class SocialNetworksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SocialNetworks->find()
            ->contain(['Users']);
        $socialNetworks = $this->paginate($query);

        $this->set(compact('socialNetworks'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Network id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialNetwork = $this->SocialNetworks->get($id, contain: ['Users']);
        $this->set(compact('socialNetwork'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialNetwork = $this->SocialNetworks->newEmptyEntity();
        if ($this->request->is('post')) {
            $socialNetwork = $this->SocialNetworks->patchEntity($socialNetwork, $this->request->getData());
            if ($this->SocialNetworks->save($socialNetwork)) {
                $this->Flash->success(__('The social network has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social network could not be saved. Please, try again.'));
        }
        $users = $this->SocialNetworks->Users->find('list', limit: 200)->all();
        $this->set(compact('socialNetwork', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Network id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialNetwork = $this->SocialNetworks->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialNetwork = $this->SocialNetworks->patchEntity($socialNetwork, $this->request->getData());
            if ($this->SocialNetworks->save($socialNetwork)) {
                $this->Flash->success(__('The social network has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social network could not be saved. Please, try again.'));
        }
        $users = $this->SocialNetworks->Users->find('list', limit: 200)->all();
        $this->set(compact('socialNetwork', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Network id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialNetwork = $this->SocialNetworks->get($id);
        if ($this->SocialNetworks->delete($socialNetwork)) {
            $this->Flash->success(__('The social network has been deleted.'));
        } else {
            $this->Flash->error(__('The social network could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
