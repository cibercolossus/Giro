<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialAspects Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 *
 * @method \App\Model\Entity\SocialAspect get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialAspect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialAspect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialAspect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialAspect|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialAspect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialAspect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialAspect findOrCreate($search, callable $callback = null, $options = [])
 */
class SocialAspectsTable extends Table
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

        $this->setTable('social_aspects');
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
            ->scalar('health')
            ->requirePresence('health', 'create')
            ->notEmpty('health');

        $validator
            ->scalar('legal_status')
            ->requirePresence('legal_status', 'create')
            ->notEmpty('legal_status');

        $validator
            ->scalar('social_report')
            ->requirePresence('social_report', 'create')
            ->notEmpty('social_report');

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
