<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AcademicInformation Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 * @property \App\Model\Table\StudiesTable|\Cake\ORM\Association\HasMany $Studies
 *
 * @method \App\Model\Entity\AcademicInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\AcademicInformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AcademicInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AcademicInformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AcademicInformation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AcademicInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicInformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicInformation findOrCreate($search, callable $callback = null, $options = [])
 */
class AcademicInformationTable extends Table
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

        $this->setTable('academic_information');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Studies', [
            'foreignKey' => 'academic_information_id'
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
            ->scalar('observations_Academic_information')
            ->requirePresence('observations_Academic_information', 'create')
            ->notEmpty('observations_Academic_information');
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
        $rules->add($rules->existsIn(['home_visity_id'], 'HomeVisities'));

        return $rules;
    }
}
