<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null, $options = [])
 */
class JobsTable extends Table
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

        $this->setTable('jobs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
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
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->requirePresence('company_name', 'create')
            ->notEmpty('company_name');

        $validator
            ->scalar('last_position')
            ->maxLength('last_position', 255)
            ->requirePresence('last_position', 'create')
            ->notEmpty('last_position');

        $validator
            ->date('entry')
            ->requirePresence('entry', 'create')
            ->notEmpty('entry');

        $validator
            ->date('retirement')
            ->requirePresence('retirement', 'create')
            ->notEmpty('retirement');

        $validator
            ->scalar('reason')
            ->maxLength('reason', 255)
            ->requirePresence('reason', 'create')
            ->notEmpty('reason');

        $validator
            ->scalar('immediate_boos')
            ->maxLength('immediate_boos', 255)
            ->requirePresence('immediate_boos', 'create')
            ->notEmpty('immediate_boos');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

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
        $rules->add($rules->existsIn(['home_visity_id'], 'HomeVisities'));

        return $rules;
    }
}
