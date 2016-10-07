<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HighlightsLayers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Layers
 * @property \Cake\ORM\Association\BelongsTo $Highlights
 *
 * @method \App\Model\Entity\HighlightsLayer get($primaryKey, $options = [])
 * @method \App\Model\Entity\HighlightsLayer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HighlightsLayer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HighlightsLayer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HighlightsLayer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HighlightsLayer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HighlightsLayer findOrCreate($search, callable $callback = null)
 */
class HighlightsLayersTable extends Table
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

        $this->table('highlights_layers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Layers', [
            'foreignKey' => 'layer_id'
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
        $rules->add($rules->existsIn(['layer_id'], 'Layers'));
        $rules->add($rules->existsIn(['highlight_id'], 'Highlights'));

        return $rules;
    }
}
