<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null)
 */
class EventsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('events');
        $this->displayField('idEvent');
        $this->primaryKey('idEvent');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idEvent')
            ->allowEmpty('idEvent', 'create');

		$validator
            ->requirePresence('Title', 'create')
            ->notEmpty('Title');

        $validator
            ->allowEmpty('Description');

        $validator
            ->allowEmpty('FuzzyDateBeginDay')
			->add('FuzzyDateBeginDay', ['multiple' => [ 'rule' => ['multiple', ['in' => array(
																'*','1','2','3','4','5','6','7','8','9','10',
																'11','12','13','14','15','16','17','18','19','20',
																'21','22','23','24','25','26','27','28','29','30','31') ]]]]);

        $validator
            ->allowEmpty('FuzzyDateBeginMonth')
			->add('FuzzyDateBeginMonth', ['multiple' => [ 'rule' => ['multiple', ['in' => array('*','1','2','3','4','5','6','7','8','9','10','11','12') ]]]]);

        $validator
            ->allowEmpty('FuzzyDateBeginYear')
			->integer('FuzzyDateBeginYear');

        $validator
            ->allowEmpty('FuzzyDateEndDay')
			->add('FuzzyDateEndDay', ['multiple' => [ 'rule' => ['multiple', ['in' => array(
																'*','1','2','3','4','5','6','7','8','9','10',
																'11','12','13','14','15','16','17','18','19','20',
																'21','22','23','24','25','26','27','28','29','30','31') ]]]]);

        $validator
            ->allowEmpty('FuzzyDateEndMonth')
			->add('FuzzyDateEndMonth', ['multiple' => [ 'rule' => ['multiple', ['in' => array('*','1','2','3','4','5','6','7','8','9','10','11','12') ]]]]);

        $validator
            ->allowEmpty('FuzzyDateEndYear')
			->integer('FuzzyDateEndYear');

        $validator
            ->allowEmpty('ResonanceLevel');

        return $validator;
    }
}
