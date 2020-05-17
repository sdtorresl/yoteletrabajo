<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SocialNetworks Controller
 *
 * @property \App\Model\Table\SocialNetworksTable $SocialNetworks
 * @method \App\Model\Entity\SocialNetwork[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
        $socialNetworks = $this->paginate($this->SocialNetworks);

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
        $socialNetwork = $this->SocialNetworks->get($id, [
            'contain' => [],
        ]);

        $this->set('socialNetwork', $socialNetwork);
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
        $this->set(compact('socialNetwork'));
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
        $socialNetwork = $this->SocialNetworks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialNetwork = $this->SocialNetworks->patchEntity($socialNetwork, $this->request->getData());
            if ($this->SocialNetworks->save($socialNetwork)) {
                $this->Flash->success(__('The social network has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social network could not be saved. Please, try again.'));
        }
        $this->set(compact('socialNetwork'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Network id.
     * @return \Cake\Http\Response|null|void Redirects to index.
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
