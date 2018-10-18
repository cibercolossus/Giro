<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controls Model
 *
 * @property \App\Model\Table\ElementsTable|\Cake\ORM\Association\BelongsTo $Elements
 * @property \App\Model\Table\AnswersTable|\Cake\ORM\Association\HasMany $Answers
 *
 * @method \App\Model\Entity\Control get($primaryKey, $options = [])
 * @method \App\Model\Entity\Control newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Control[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Control|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Control|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Control patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Control[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Control findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ControlsTable extends Table
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

        $this->setTable('controls');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->belongsTo('Elements', [
            'foreignKey' => 'element_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Answers', [
            'foreignKey' => 'control_id'
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
        $rules->add($rules->existsIn(['element_id'], 'Elements'));
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
