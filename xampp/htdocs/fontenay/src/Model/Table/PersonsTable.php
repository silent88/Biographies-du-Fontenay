<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persons Model
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null)
 */
class PersonsTable extends Table
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

        $this->table('persons');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('FirstName');
			//->alphaNumeric('FirstName')
			
        $validator
            ->allowEmpty('LastName');
			//->alphaNumeric('LastName')

        $validator
            ->date('BirthDate')
            ->allowEmpty('BirthDate');

        $validator
            ->allowEmpty('BirthHour')
			->time('BirthHour');

        $validator
            ->allowEmpty('BirthPlace');

        $validator
            ->allowEmpty('BirthCountry');

        $validator
            ->integer('BirthTimeZone')
            ->allowEmpty('BirthTimeZone');

        $validator
            ->date('DeathDate')
            ->allowEmpty('DeathDate');

        $validator
            ->allowEmpty('DeathHour')
			->time('DeathHour');

        $validator
            ->allowEmpty('DeathPlace');

        $validator
            ->allowEmpty('DeathCountry');

        return $validator;
    }
}
