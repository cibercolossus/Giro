<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \App\Model\Table\ComponentsTable|\Cake\ORM\Association\BelongsTo $Components
 * @property \App\Model\Table\InspectionsTable|\Cake\ORM\Association\BelongsTo $Inspections
 *
 * @method \App\Model\Entity\Result get($primaryKey, $options = [])
 * @method \App\Model\Entity\Result newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Result[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Result|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Result|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Result[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Result findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultsTable extends Table
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

        $this->setTable('results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Components', [
            'foreignKey' => 'component_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Inspections', [
            'foreignKey' => 'inspection_id',
            'joinType' => 'INNER'
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
            ->integer('yes')
            ->requirePresence('yes', 'create')
            ->notEmpty('yes');

        $validator
            ->integer('no')
            ->requirePresence('no', 'create')
            ->notEmpty('no');

        $validator
            ->integer('na')
            ->requirePresence('na', 'create')
            ->notEmpty('na');

        $validator
            ->scalar('qty_question')
            ->maxLength('qty_question', 255)
            ->requirePresence('qty_question', 'create')
            ->notEmpty('qty_question');

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
        $rules->add($rules->existsIn(['component_id'], 'Components'));
        $rules->add($rules->existsIn(['inspection_id'], 'Inspections'));

        return $rules;
    }
}
