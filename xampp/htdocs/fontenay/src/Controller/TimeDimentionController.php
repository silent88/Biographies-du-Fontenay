<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\Collection\Collection;

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
	 * Get person birthdays
	 * 
	 * @param string|null $id of birthdate
	 * @return array
	 */
	 public function findPersonBirthdays($bDateId = null)
	 {
	 	
		$bdate = $this->TimeDimention->get($bDateId);
		
		$birthdays = $this->TimeDimention->find('all', array(
			'conditions' => array(
				'TimeDimention.d' => $bdate['d'],
				'TimeDimention.m' => $bdate['m'],
				'TimeDimention.y >=' => $bdate['y']
				),
			'order'	=> ['TimeDimention.id' => 'ASC'],
			'limit' => 108
		));
		$birthdays->select(['TimeDimention.id', 'TimeDimention.date']);
		
		//debug($birthdays->toArray());
		//debug($birthdays[0]);
		
		//Filter $birthdays
		$eventStart = new Date('2012-01-01');
		$eventEnd = new Date('2014-01-01');
		
		//$r = new Collection(array('0'=>'0'));
		$r = array();
		foreach($birthdays as $bday) {
			if (($bday->date >= $eventStart) and ($bday->date <= $eventEnd)) {
				//$r->append($bday);
				debug($bday->id);
				$r[] = $bday;
			}
		}
		
		debug($r[0]->id);
		 
		 /*
		$r = $birthdays->every(function ($bday) {
			//return (($bday->date >= $eventStart) and ($bday->Date < $eventEnd));
			
			/*
			debug($bday->date);
			debug(new Date('2012-01-01'));
			debug(($bday->date <= new Date('2012-01-01')));
			debug($bday);
			 * */
			
			//debug((($bday->date >= new Date('2012-01-01')) and ($bday->Date < new Date('2014-01-01'))));
			//return (($bday->date >= new Date('2012-01-01')) and ($bday->Date < new Date('2015-01-01')));
			//return (($bday->date >= new Date('2012-01-01')));
			
		//});
		
		/*  
		$r = $birthdays->match(
			[
				'TimeDimention.date >=' => $eventStart,
				'TimeDimention.date <=' => $eventEnd
			]
			
		);
		*/
		debug($r);
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
