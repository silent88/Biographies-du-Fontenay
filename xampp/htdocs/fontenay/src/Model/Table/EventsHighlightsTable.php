<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventsHighlights Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $Highlights
 *
 * @method \App\Model\Entity\EventsHighlight get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventsHighlight newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EventsHighlight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventsHighlight|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventsHighlight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventsHighlight[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventsHighlight findOrCreate($search, callable $callback = null)
 */
class EventsHighlightsTable extends Table
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

        $this->table('events_highlights');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id'
        ]);
        $this->belongsTo('Highlights', [
            'foreignKey' => 'highlight_id'
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        $rules->add($rules->existsIn(['highlight_id'], 'Highlights'));

        return $rules;
    }
}
