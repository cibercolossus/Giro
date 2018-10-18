<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relatives Model
 *
 * @property \App\Model\Table\FamiliesTable|\Cake\ORM\Association\BelongsTo $Families
 *
 * @method \App\Model\Entity\Relative get($primaryKey, $options = [])
 * @method \App\Model\Entity\Relative newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Relative[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Relative|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relative|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relative patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Relative[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Relative findOrCreate($search, callable $callback = null, $options = [])
 */
class RelativesTable extends Table
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

        $this->setTable('relatives');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Families', [
            'foreignKey' => 'family_id',
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

  /*      $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 255)
            ->requirePresence('relationship', 'create')
            ->notEmpty('relationship');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->scalar('cc')
            ->maxLength('cc', 255)
            ->requirePresence('cc', 'create')
            ->notEmpty('cc');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 255)
            ->requirePresence('occupation', 'create')
            ->notEmpty('occupation');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');*/

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
        $rules->add($rules->existsIn(['family_id'], 'Families'));

        return $rules;
    }
}
