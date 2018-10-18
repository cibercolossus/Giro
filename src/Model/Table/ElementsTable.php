<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Elements Model
 *
 * @property \App\Model\Table\ComponentsTable|\Cake\ORM\Association\BelongsTo $Components
 * @property \App\Model\Table\ControlsTable|\Cake\ORM\Association\HasMany $Controls
 *
 * @method \App\Model\Entity\Element get($primaryKey, $options = [])
 * @method \App\Model\Entity\Element newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Element[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Element|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Element|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Element patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Element[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Element findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ElementsTable extends Table
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

        $this->setTable('elements');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->belongsTo('Components', [
            'foreignKey' => 'component_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Controls', [
            'foreignKey' => 'element_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
