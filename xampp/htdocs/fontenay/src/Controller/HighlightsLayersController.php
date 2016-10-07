<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HighlightsLayers Controller
 *
 * @property \App\Model\Table\HighlightsLayersTable $HighlightsLayers
 */
class HighlightsLayersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Layers', 'Highlights']
        ];
        $highlightsLayers = $this->paginate($this->HighlightsLayers);

        $this->set(compact('highlightsLayers'));
        $this->set('_serialize', ['highlightsLayers']);
    }

    /**
     * View method
     *
     * @param string|null $id Highlights Layer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $highlightsLayer = $this->HighlightsLayers->get($id, [
            'contain' => ['Layers', 'Highlights']
        ]);

        $this->set('highlightsLayer', $highlightsLayer);
        $this->set('_serialize', ['highlightsLayer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $highlightsLayer = $this->HighlightsLayers->newEntity();
        if ($this->request->is('post')) {
            $highlightsLayer = $this->HighlightsLayers->patchEntity($highlightsLayer, $this->request->data);
            if ($this->HighlightsLayers->save($highlightsLayer)) {
                $this->Flash->success(__('The highlights layer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The highlights layer could not be saved. Please, try again.'));
            }
        }
        $layers = $this->HighlightsLayers->Layers->find('list', ['limit' => 200]);
        $highlights = $this->HighlightsLayers->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('highlightsLayer', 'layers', 'highlights'));
        $this->set('_serialize', ['highlightsLayer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Highlights Layer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $highlightsLayer = $this->HighlightsLayers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $highlightsLayer = $this->HighlightsLayers->patchEntity($highlightsLayer, $this->request->data);
            if ($this->HighlightsLayers->save($highlightsLayer)) {
                $this->Flash->success(__('The highlights layer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The highlights layer could not be saved. Please, try again.'));
            }
        }
        $layers = $this->HighlightsLayers->Layers->find('list', ['limit' => 200]);
        $highlights = $this->HighlightsLayers->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('highlightsLayer', 'layers', 'highlights'));
        $this->set('_serialize', ['highlightsLayer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Highlights Layer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $highlightsLayer = $this->HighlightsLayers->get($id);
        if ($this->HighlightsLayers->delete($highlightsLayer)) {
            $this->Flash->success(__('The highlights layer has been deleted.'));
        } else {
            $this->Flash->error(__('The highlights layer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
