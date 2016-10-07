<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EventsHighlights Controller
 *
 * @property \App\Model\Table\EventsHighlightsTable $EventsHighlights
 */
class EventsHighlightsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'Highlights']
        ];
        $eventsHighlights = $this->paginate($this->EventsHighlights);

        $this->set(compact('eventsHighlights'));
        $this->set('_serialize', ['eventsHighlights']);
    }

    /**
     * View method
     *
     * @param string|null $id Events Highlight id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventsHighlight = $this->EventsHighlights->get($id, [
            'contain' => ['Events', 'Highlights']
        ]);

        $this->set('eventsHighlight', $eventsHighlight);
        $this->set('_serialize', ['eventsHighlight']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventsHighlight = $this->EventsHighlights->newEntity();
        if ($this->request->is('post')) {
            $eventsHighlight = $this->EventsHighlights->patchEntity($eventsHighlight, $this->request->data);
            if ($this->EventsHighlights->save($eventsHighlight)) {
                $this->Flash->success(__('The events highlight has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The events highlight could not be saved. Please, try again.'));
            }
        }
        $events = $this->EventsHighlights->Events->find('list', ['limit' => 200]);
        $highlights = $this->EventsHighlights->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('eventsHighlight', 'events', 'highlights'));
        $this->set('_serialize', ['eventsHighlight']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Events Highlight id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventsHighlight = $this->EventsHighlights->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventsHighlight = $this->EventsHighlights->patchEntity($eventsHighlight, $this->request->data);
            if ($this->EventsHighlights->save($eventsHighlight)) {
                $this->Flash->success(__('The events highlight has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The events highlight could not be saved. Please, try again.'));
            }
        }
        $events = $this->EventsHighlights->Events->find('list', ['limit' => 200]);
        $highlights = $this->EventsHighlights->Highlights->find('list', ['limit' => 200]);
        $this->set(compact('eventsHighlight', 'events', 'highlights'));
        $this->set('_serialize', ['eventsHighlight']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Events Highlight id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventsHighlight = $this->EventsHighlights->get($id);
        if ($this->EventsHighlights->delete($eventsHighlight)) {
            $this->Flash->success(__('The events highlight has been deleted.'));
        } else {
            $this->Flash->error(__('The events highlight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
