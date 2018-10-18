<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maps Model
 *
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\BelongsTo $Sectors
 *
 * @method \App\Model\Entity\Map get($primaryKey, $options = [])
 * @method \App\Model\Entity\Map newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Map[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Map|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Map|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Map patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Map[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Map findOrCreate($search, callable $callback = null, $options = [])
 */
class MapsTable extends Table
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

        $this->setTable('maps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Sectors', [
            'foreignKey' => 'sector_id',
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
            ->scalar('map')
            ->maxLength('map', 255)
            ->requirePresence('map', 'create')
            ->notEmpty('map');

        $validator
            ->scalar('commune')
            ->maxLength('commune', 255)
            ->requirePresence('commune', 'create')
            ->notEmpty('commune');

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
        $rules->add($rules->existsIn(['sector_id'], 'Sectors'));

        return $rules;
    }
}
