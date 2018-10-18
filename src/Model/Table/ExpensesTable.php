<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expenses Model
 *
 * @property \App\Model\Table\EconomiesTable|\Cake\ORM\Association\BelongsTo $Economies
 *
 * @method \App\Model\Entity\Expense get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expense newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Expense[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expense|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expense|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expense patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expense[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expense findOrCreate($search, callable $callback = null, $options = [])
 */
class ExpensesTable extends Table
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

        $this->setTable('expenses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Economies', [
            'foreignKey' => 'economy_id',
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
            ->integer('rent')
            ->requirePresence('rent', 'create')
            ->notEmpty('rent');

        $validator
            ->integer('public_services')
            ->requirePresence('public_services', 'create')
            ->notEmpty('public_services');

        $validator
            ->integer('feeding')
            ->requirePresence('feeding', 'create')
            ->notEmpty('feeding');

        $validator
            ->integer('education')
            ->requirePresence('education', 'create')
            ->notEmpty('education');

        $validator
            ->integer('transport')
            ->requirePresence('transport', 'create')
            ->notEmpty('transport');

        $validator
            ->integer('recreation')
            ->requirePresence('recreation', 'create')
            ->notEmpty('recreation');

        $validator
            ->integer('credit_cards')
            ->requirePresence('credit_cards', 'create')
            ->notEmpty('credit_cards');

        $validator
            ->integer('phone_plan')
            ->requirePresence('phone_plan', 'create')
            ->notEmpty('phone_plan');

        $validator
            ->integer('scheduled_savings')
            ->requirePresence('scheduled_savings', 'create')
            ->notEmpty('scheduled_savings');

        $validator
            ->integer('family_support')
            ->requirePresence('family_support', 'create')
            ->notEmpty('family_support');

        $validator
            ->integer('credits')
            ->requirePresence('credits', 'create')
            ->notEmpty('credits');

        $validator
            ->integer('others')
            ->requirePresence('others', 'create')
            ->notEmpty('others');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

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
        $rules->add($rules->existsIn(['economy_id'], 'Economies'));

        return $rules;
    }
}
