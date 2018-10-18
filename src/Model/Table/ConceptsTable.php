<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Concepts Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 *
 * @method \App\Model\Entity\Concept get($primaryKey, $options = [])
 * @method \App\Model\Entity\Concept newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Concept[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Concept|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Concept|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Concept patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Concept[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Concept findOrCreate($search, callable $callback = null, $options = [])
 */
class ConceptsTable extends Table
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

        $this->setTable('concepts');
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
            ->scalar('neighbornhood')
            ->requirePresence('neighbornhood', 'create')
            ->notEmpty('neighbornhood');

        $validator
            ->scalar('friends')
            ->requirePresence('friends', 'create')
            ->notEmpty('friends');

        $validator
            ->scalar('family')
            ->requirePresence('family', 'create')
            ->notEmpty('family');

        $validator
            ->scalar('characterization')
            ->requirePresence('characterization', 'create')
            ->notEmpty('characterization');

        $validator
            ->scalar('visit')
            ->requirePresence('visit', 'create')
            ->notEmpty('visit');

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
