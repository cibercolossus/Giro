<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Families Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 * @property \App\Model\Table\CloseRelativesTable|\Cake\ORM\Association\HasMany $CloseRelatives
 * @property \App\Model\Table\RelativesTable|\Cake\ORM\Association\HasMany $Relatives
 *
 * @method \App\Model\Entity\Family get($primaryKey, $options = [])
 * @method \App\Model\Entity\Family newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Family[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Family|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Family|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Family patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Family[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Family findOrCreate($search, callable $callback = null, $options = [])
 */
class FamiliesTable extends Table
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

        $this->setTable('families');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CloseRelatives', [
            'foreignKey' => 'family_id'
        ]);
        $this->hasMany('Relatives', [
            'foreignKey' => 'family_id'
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
/*
        $validator
            ->scalar('family_information_analysis')
            ->requirePresence('family_information_analysis', 'create')
            ->notEmpty('family_information_analysis');*/

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
