<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evidences Model
 *
 * @property \App\Model\Table\AnswersTable|\Cake\ORM\Association\BelongsTo $Answers
 *
 * @method \App\Model\Entity\Evidence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evidence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evidence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evidence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evidence|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evidence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evidence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evidence findOrCreate($search, callable $callback = null, $options = [])
 */
class EvidencesTable extends Table
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

        $this->setTable('evidences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Answers', [
            'foreignKey' => 'answer_id',
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->requirePresence('file', 'create')
            ->notEmpty('file');

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
        $rules->add($rules->existsIn(['answer_id'], 'Answers'));

        return $rules;
    }
}
