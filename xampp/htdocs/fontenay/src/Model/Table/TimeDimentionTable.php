<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimeDimention Model
 *
 * @method \App\Model\Entity\TimeDimention get($primaryKey, $options = [])
 * @method \App\Model\Entity\TimeDimention newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TimeDimention[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimeDimention|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimeDimention patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TimeDimention[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimeDimention findOrCreate($search, callable $callback = null)
 */
class TimeDimentionTable extends Table
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

        $this->table('time_dimention');
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
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('y')
            ->allowEmpty('y');

        $validator
            ->integer('m')
            ->allowEmpty('m');

        $validator
            ->integer('d')
            ->allowEmpty('d');

        $validator
            ->integer('yw')
            ->allowEmpty('yw');

        $validator
            ->integer('w')
            ->allowEmpty('w');

        $validator
            ->integer('q')
            ->allowEmpty('q');

        $validator
            ->integer('wd')
            ->allowEmpty('wd');

        $validator
            ->allowEmpty('m_name');

        $validator
            ->allowEmpty('wd_name');

        return $validator;
    }
}
