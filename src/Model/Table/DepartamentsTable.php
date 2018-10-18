<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departaments Model
 *
 * @property \App\Model\Table\MunicipalitiesTable|\Cake\ORM\Association\HasMany $Municipalities
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\HasMany $Sectors
 *
 * @method \App\Model\Entity\Departament get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departament newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Departament[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departament|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departament|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departament patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departament[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departament findOrCreate($search, callable $callback = null, $options = [])
 */
class DepartamentsTable extends Table
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

        $this->setTable('departaments');
        $this->setDisplayField('departament');
        $this->setPrimaryKey('id');

        $this->hasMany('Municipalities', [
            'foreignKey' => 'departament_id'
        ]);
        $this->hasMany('Sectors', [
            'foreignKey' => 'departament_id'
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
            ->scalar('departament')
            ->maxLength('departament', 255)
            ->requirePresence('departament', 'create')
            ->notEmpty('departament');

        return $validator;
    }
}
