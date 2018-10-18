<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Economies Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 * @property \App\Model\Table\BankAccountsTable|\Cake\ORM\Association\HasMany $BankAccounts
 * @property \App\Model\Table\ExpensesTable|\Cake\ORM\Association\HasMany $Expenses
 * @property \App\Model\Table\IncomeTable|\Cake\ORM\Association\HasMany $Income
 *
 * @method \App\Model\Entity\Economy get($primaryKey, $options = [])
 * @method \App\Model\Entity\Economy newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Economy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Economy|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Economy|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Economy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Economy[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Economy findOrCreate($search, callable $callback = null, $options = [])
 */
class EconomiesTable extends Table
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

        $this->setTable('economies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('BankAccounts', [
            'foreignKey' => 'economy_id'
        ]);
        $this->hasMany('Expenses', [
            'foreignKey' => 'economy_id'
        ]);
        $this->hasMany('Income', [
            'foreignKey' => 'economy_id'
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
            ->scalar('home_economics')
            ->requirePresence('home_economics', 'create')
            ->notEmpty('home_economics');

        $validator
            ->scalar('current_credits')
            ->requirePresence('current_credits', 'create')
            ->notEmpty('current_credits');

        $validator
            ->scalar('furniture')
            ->requirePresence('furniture', 'create')
            ->notEmpty('furniture');

        $validator
            ->scalar('ummovables')
            ->requirePresence('ummovables', 'create')
            ->notEmpty('ummovables');

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
