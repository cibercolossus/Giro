<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BankAccounts Model
 *
 * @property \App\Model\Table\EconomiesTable|\Cake\ORM\Association\BelongsTo $Economies
 *
 * @method \App\Model\Entity\BankAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\BankAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BankAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BankAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankAccount|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BankAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BankAccount findOrCreate($search, callable $callback = null, $options = [])
 */
class BankAccountsTable extends Table
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

        $this->setTable('bank_accounts');
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
            ->scalar('bank_name')
            ->maxLength('bank_name', 255)
            ->requirePresence('bank_name', 'create')
            ->notEmpty('bank_name');

        $validator
            ->scalar('account_type')
            ->maxLength('account_type', 255)
            ->requirePresence('account_type', 'create')
            ->notEmpty('account_type');

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
