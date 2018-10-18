<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Studies Model
 *
 * @property \App\Model\Table\AcademicInformationTable|\Cake\ORM\Association\BelongsTo $AcademicInformation
 *
 * @method \App\Model\Entity\Study get($primaryKey, $options = [])
 * @method \App\Model\Entity\Study newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Study[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Study|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Study|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Study patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Study[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Study findOrCreate($search, callable $callback = null, $options = [])
 */
class StudiesTable extends Table
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

        $this->setTable('studies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('AcademicInformation', [
            'foreignKey' => 'academic_information_id',
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
/*
        $validator
            ->scalar('studies')
            ->maxLength('studies', 255)
            ->requirePresence('studies', 'create')
            ->notEmpty('studies');

        $validator
            ->scalar('name_institution')
            ->maxLength('name_institution', 255)
            ->requirePresence('name_institution', 'create')
            ->notEmpty('name_institution');

        $validator
            ->scalar('obtained_title')
            ->maxLength('obtained_title', 255)
            ->requirePresence('obtained_title', 'create')
            ->notEmpty('obtained_title');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('registry_number')
            ->maxLength('registry_number', 255)
            ->requirePresence('registry_number', 'create')
            ->notEmpty('registry_number');
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
        $rules->add($rules->existsIn(['academic_information_id'], 'AcademicInformation'));

        return $rules;
    }
}
