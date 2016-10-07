<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TimeDimention Controller
 *
 * @property \App\Model\Table\TimeDimentionTable $TimeDimention
 */
class TimeDimentionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $timeDimention = $this->paginate($this->TimeDimention);

        $this->set(compact('timeDimention'));
        $this->set('_serialize', ['timeDimention']);
    }

    /**
     * View method
     *
     * @param string|null $id Time Dimention id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeDimention = $this->TimeDimention->get($id, [
            'contain' => []
        ]);

        $this->set('timeDimention', $timeDimention);
        $this->set('_serialize', ['timeDimention']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeDimention = $this->TimeDimention->newEntity();
        if ($this->request->is('post')) {
            $timeDimention = $this->TimeDimention->patchEntity($timeDimention, $this->request->data);
            if ($this->TimeDimention->save($timeDimention)) {
                $this->Flash->success(__('The time dimention has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The time dimention could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timeDimention'));
        $this->set('_serialize', ['timeDimention']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Dimention id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeDimention = $this->TimeDimention->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeDimention = $this->TimeDimention->patchEntity($timeDimention, $this->request->data);
            if ($this->TimeDimention->save($timeDimention)) {
                $this->Flash->success(__('The time dimention has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The time dimention could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timeDimention'));
        $this->set('_serialize', ['timeDimention']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Dimention id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeDimention = $this->TimeDimention->get($id);
        if ($this->TimeDimention->delete($timeDimention)) {
            $this->Flash->success(__('The time dimention has been deleted.'));
        } else {
            $this->Flash->error(__('The time dimention could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
