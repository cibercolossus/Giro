<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photographies Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 *
 * @method \App\Model\Entity\Photography get($primaryKey, $options = [])
 * @method \App\Model\Entity\Photography newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Photography[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Photography|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Photography|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Photography patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Photography[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Photography findOrCreate($search, callable $callback = null, $options = [])
 */
class PhotographiesTable extends Table
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

        $this->setTable('photographies');
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
            ->scalar('nomeclature')
            ->maxLength('nomeclature', 255)
            ->requirePresence('nomeclature', 'create')
            ->notEmpty('nomeclature');

        $validator
            ->scalar('facade')
            ->maxLength('facade', 255)
            ->requirePresence('facade', 'create')
            ->notEmpty('facade');

        $validator
            ->scalar('candidate_family')
            ->maxLength('candidate_family', 255)
            ->requirePresence('candidate_family', 'create')
            ->notEmpty('candidate_family');

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
