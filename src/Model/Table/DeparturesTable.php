<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departures Model
 *
 * @property \App\Model\Table\CharactersTable|\Cake\ORM\Association\BelongsTo $Characters
 *
 * @method \App\Model\Entity\Departure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Departure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departure|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departure|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departure findOrCreate($search, callable $callback = null, $options = [])
 */
class DeparturesTable extends Table
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

        $this->setTable('departures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Characters', [
            'foreignKey' => 'character_id',
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

   /*     $validator
            ->scalar('place')
            ->maxLength('place', 255)
            ->requirePresence('place', 'create')
            ->notEmpty('place');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('time_stay')
            ->maxLength('time_stay', 255)
            ->requirePresence('time_stay', 'create')
            ->notEmpty('time_stay');

        $validator
            ->scalar('reason')
            ->maxLength('reason', 255)
            ->requirePresence('reason', 'create')
            ->notEmpty('reason');
*/
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
        $rules->add($rules->existsIn(['character_id'], 'Characters'));

        return $rules;
    }
}
