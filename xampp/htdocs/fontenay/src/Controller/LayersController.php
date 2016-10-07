<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Layers Controller
 *
 * @property \App\Model\Table\LayersTable $Layers
 */
class LayersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $layers = $this->paginate($this->Layers);

        $this->set(compact('layers'));
        $this->set('_serialize', ['layers']);
    }

    /**
     * View method
     *
     * @param string|null $id Layer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $layer = $this->Layers->get($id, [
            'contain' => ['Highlights']
        ]);

        $this->set('layer', $layer);
        $this->set('_serialize', ['layer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $layer = $this->Layers->newEntity();
        if ($this->request->is('post')) {
            $layer = $this->Layers->patchEntity($layer, $this->request->data);
            if ($this->Layers->save($layer)) {
                $this->Flash->success(__('The layer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The layer could not be saved. Please, try again.'));
            }
        }
        $highlights = $this->Layers->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('layer', 'highlights'));
        $this->set('_serialize', ['layer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Layer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $layer = $this->Layers->get($id, [
            'contain' => ['Highlights']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $layer = $this->Layers->patchEntity($layer, $this->request->data);
            if ($this->Layers->save($layer)) {
                $this->Flash->success(__('The layer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The layer could not be saved. Please, try again.'));
            }
        }
        $highlights = $this->Layers->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('layer', 'highlights'));
        $this->set('_serialize', ['layer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Layer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $layer = $this->Layers->get($id);
        if ($this->Layers->delete($layer)) {
            $this->Flash->success(__('The layer has been deleted.'));
        } else {
            $this->Flash->error(__('The layer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
