<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Highlights Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Events
 * @property \Cake\ORM\Association\BelongsToMany $Layers
 *
 * @method \App\Model\Entity\Highlight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Highlight newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Highlight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Highlight|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Highlight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Highlight[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Highlight findOrCreate($search, callable $callback = null)
 */
class HighlightsTable extends Table
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

        $this->table('highlights');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Events', [
            'foreignKey' => 'highlight_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_highlights'
        ]);
        $this->belongsToMany('Layers', [
            'foreignKey' => 'highlight_id',
            'targetForeignKey' => 'layer_id',
            'joinTable' => 'highlights_layers'
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

        $validator
            ->allowEmpty('Name');

        $validator
            ->allowEmpty('Color');

        $validator
            ->integer('OrderNo')
            ->allowEmpty('OrderNo');

        return $validator;
    }
}
