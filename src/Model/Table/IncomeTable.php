<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Income Model
 *
 * @property \App\Model\Table\EconomiesTable|\Cake\ORM\Association\BelongsTo $Economies
 *
 * @method \App\Model\Entity\Income get($primaryKey, $options = [])
 * @method \App\Model\Entity\Income newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Income[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Income|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Income[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Income findOrCreate($search, callable $callback = null, $options = [])
 */
class IncomeTable extends Table
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

        $this->setTable('income');
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
            ->scalar('monthly_income')
            ->maxLength('monthly_income', 255)
            ->requirePresence('monthly_income', 'create')
            ->notEmpty('monthly_income');

        $validator
            ->decimal('value')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

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
