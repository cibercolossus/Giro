<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipalities Model
 *
 * @property \App\Model\Table\DepartamentsTable|\Cake\ORM\Association\BelongsTo $Departaments
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\HasMany $Sectors
 *
 * @method \App\Model\Entity\Municipality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Municipality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Municipality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Municipality|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Municipality|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Municipality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Municipality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Municipality findOrCreate($search, callable $callback = null, $options = [])
 */
class MunicipalitiesTable extends Table
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

        $this->setTable('municipalities');
        $this->setDisplayField('municipality');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departaments', [
            'foreignKey' => 'departament_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Sectors', [
            'foreignKey' => 'municipality_id'
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
            ->scalar('municipality')
            ->maxLength('municipality', 255)
            ->requirePresence('municipality', 'create')
            ->notEmpty('municipality');

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
        $rules->add($rules->existsIn(['departament_id'], 'Departaments'));

        return $rules;
    }
}
