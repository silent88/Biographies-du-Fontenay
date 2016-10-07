<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Highlights Controller
 *
 * @property \App\Model\Table\HighlightsTable $Highlights
 */
class HighlightsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $highlights = $this->paginate($this->Highlights);

        $this->set(compact('highlights'));
        $this->set('_serialize', ['highlights']);
    }

    /**
     * View method
     *
     * @param string|null $id Highlight id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $highlight = $this->Highlights->get($id, [
            'contain' => ['Events', 'Layers']
        ]);

        $this->set('highlight', $highlight);
        $this->set('_serialize', ['highlight']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $highlight = $this->Highlights->newEntity();
        if ($this->request->is('post')) {
            $highlight = $this->Highlights->patchEntity($highlight, $this->request->data);
            if ($this->Highlights->save($highlight)) {
                $this->Flash->success(__('The highlight has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The highlight could not be saved. Please, try again.'));
            }
        }
        $events = $this->Highlights->Events->find('list', ['limit' => 200]);
        $layers = $this->Highlights->Layers->find('list', ['limit' => 200]);
        $this->set(compact('highlight', 'events', 'layers'));
        $this->set('_serialize', ['highlight']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Highlight id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $highlight = $this->Highlights->get($id, [
            'contain' => ['Events', 'Layers']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $highlight = $this->Highlights->patchEntity($highlight, $this->request->data);
            if ($this->Highlights->save($highlight)) {
                $this->Flash->success(__('The highlight has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The highlight could not be saved. Please, try again.'));
            }
        }
        $events = $this->Highlights->Events->find('list', ['limit' => 200]);
        $layers = $this->Highlights->Layers->find('list', ['limit' => 200]);
        $this->set(compact('highlight', 'events', 'layers'));
        $this->set('_serialize', ['highlight']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Highlight id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $highlight = $this->Highlights->get($id);
        if ($this->Highlights->delete($highlight)) {
            $this->Flash->success(__('The highlight has been deleted.'));
        } else {
            $this->Flash->error(__('The highlight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
