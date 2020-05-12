<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Socialnetworks Controller
 *
 * @property \App\Model\Table\SocialnetworksTable $Socialnetworks
 * @method \App\Model\Entity\Socialnetwork[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialnetworksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $socialnetworks = $this->paginate($this->Socialnetworks);

        $this->set(compact('socialnetworks'));
    }

    /**
     * View method
     *
     * @param string|null $id Socialnetwork id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialnetwork = $this->Socialnetworks->get($id, [
            'contain' => [],
        ]);

        $this->set('socialnetwork', $socialnetwork);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialnetwork = $this->Socialnetworks->newEmptyEntity();
        if ($this->request->is('post')) {
            $socialnetwork = $this->Socialnetworks->patchEntity($socialnetwork, $this->request->getData());
            if ($this->Socialnetworks->save($socialnetwork)) {
                $this->Flash->success(__('The socialnetwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socialnetwork could not be saved. Please, try again.'));
        }
        $this->set(compact('socialnetwork'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Socialnetwork id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialnetwork = $this->Socialnetworks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialnetwork = $this->Socialnetworks->patchEntity($socialnetwork, $this->request->getData());
            if ($this->Socialnetworks->save($socialnetwork)) {
                $this->Flash->success(__('The socialnetwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socialnetwork could not be saved. Please, try again.'));
        }
        $this->set(compact('socialnetwork'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Socialnetwork id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialnetwork = $this->Socialnetworks->get($id);
        if ($this->Socialnetworks->delete($socialnetwork)) {
            $this->Flash->success(__('The socialnetwork has been deleted.'));
        } else {
            $this->Flash->error(__('The socialnetwork could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
