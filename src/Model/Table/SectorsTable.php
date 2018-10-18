<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sectors Model
 *
 * @property \App\Model\Table\DepartamentsTable|\Cake\ORM\Association\BelongsTo $Departaments
 * @property \App\Model\Table\MunicipalitiesTable|\Cake\ORM\Association\BelongsTo $Municipalities
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 * @property \App\Model\Table\MapsTable|\Cake\ORM\Association\HasMany $Maps
 *
 * @method \App\Model\Entity\Sector get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sector newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sector[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sector|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sector|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sector patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sector[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sector findOrCreate($search, callable $callback = null, $options = [])
 */
class SectorsTable extends Table
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

        $this->setTable('sectors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departaments', [
            'foreignKey' => 'departament_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Municipalities', [
            'foreignKey' => 'municipality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Maps', [
            'foreignKey' => 'sector_id'
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
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 255)
            ->requirePresence('neighborhood', 'create')
            ->notEmpty('neighborhood');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('stratum')
            ->maxLength('stratum', 255)
            ->requirePresence('stratum', 'create')
            ->notEmpty('stratum');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('recidence_time')
            ->requirePresence('recidence_time', 'create')
            ->notEmpty('recidence_time');

        $validator
            ->scalar('commune')
            ->maxLength('commune', 255)
            ->requirePresence('commune', 'create')
            ->notEmpty('commune');

        $validator
            ->scalar('risk_level')
            ->maxLength('risk_level', 255)
            ->requirePresence('risk_level', 'create')
            ->notEmpty('risk_level');

        $validator
            ->scalar('geographic_location')
            ->requirePresence('geographic_location', 'create')
            ->notEmpty('geographic_location');

        $validator
            ->scalar('description_home')
            ->requirePresence('description_home', 'create')
            ->notEmpty('description_home');

        $validator
            ->scalar('zone')
            ->maxLength('zone', 255)
            ->requirePresence('zone', 'create')
            ->notEmpty('zone');

        $validator
            ->boolean('school')
            ->requirePresence('school', 'create')
            ->notEmpty('school');

        $validator
            ->boolean('supermarket')
            ->requirePresence('supermarket', 'create')
            ->notEmpty('supermarket');

        $validator
            ->boolean('pilice_estation')
            ->requirePresence('pilice_estation', 'create')
            ->notEmpty('pilice_estation');

        $validator
            ->boolean('hospitals')
            ->requirePresence('hospitals', 'create')
            ->notEmpty('hospitals');

        $validator
            ->boolean('parks')
            ->requirePresence('parks', 'create')
            ->notEmpty('parks');

        $validator
            ->boolean('colleges')
            ->requirePresence('colleges', 'create')
            ->notEmpty('colleges');

        $validator
            ->boolean('shops')
            ->requirePresence('shops', 'create')
            ->notEmpty('shops');

        $validator
            ->boolean('cai')
            ->requirePresence('cai', 'create')
            ->notEmpty('cai');

        $validator
            ->boolean('clinic')
            ->requirePresence('clinic', 'create')
            ->notEmpty('clinic');

        $validator
            ->boolean('parkland')
            ->requirePresence('parkland', 'create')
            ->notEmpty('parkland');

        $validator
            ->boolean('university')
            ->requirePresence('university', 'create')
            ->notEmpty('university');

        $validator
            ->boolean('mall')
            ->requirePresence('mall', 'create')
            ->notEmpty('mall');

        $validator
            ->boolean('center_christian')
            ->requirePresence('center_christian', 'create')
            ->notEmpty('center_christian');

        $validator
            ->boolean('church')
            ->requirePresence('church', 'create')
            ->notEmpty('church');

        $validator
            ->boolean('stadium')
            ->requirePresence('stadium', 'create')
            ->notEmpty('stadium');

        $validator
            ->scalar('access_roads')
            ->maxLength('access_roads', 255)
            ->requirePresence('access_roads', 'create')
            ->notEmpty('access_roads');

        $validator
            ->scalar('transportation_service')
            ->maxLength('transportation_service', 255)
            ->requirePresence('transportation_service', 'create')
            ->notEmpty('transportation_service');

        $validator
            ->scalar('relationship_neighbors')
            ->maxLength('relationship_neighbors', 255)
            ->requirePresence('relationship_neighbors', 'create')
            ->notEmpty('relationship_neighbors');

        $validator
            ->scalar('drug_dispensing')
            ->maxLength('drug_dispensing', 255)
            ->requirePresence('drug_dispensing', 'create')
            ->notEmpty('drug_dispensing');

        $validator
            ->scalar('prostitution_zone')
            ->maxLength('prostitution_zone', 255)
            ->requirePresence('prostitution_zone', 'create')
            ->notEmpty('prostitution_zone');

        $validator
            ->scalar('high_impact_area')
            ->maxLength('high_impact_area', 255)
            ->requirePresence('high_impact_area', 'create')
            ->notEmpty('high_impact_area');

        $validator
            ->scalar('presence_animals')
            ->maxLength('presence_animals', 255)
            ->requirePresence('presence_animals', 'create')
            ->notEmpty('presence_animals');

        $validator
            ->scalar('sewage')
            ->maxLength('sewage', 255)
            ->requirePresence('sewage', 'create')
            ->notEmpty('sewage');

        $validator
            ->scalar('dump')
            ->maxLength('dump', 255)
            ->requirePresence('dump', 'create')
            ->notEmpty('dump');

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
        $rules->add($rules->existsIn(['municipality_id'], 'Municipalities'));
        $rules->add($rules->existsIn(['home_visity_id'], 'HomeVisities'));

        return $rules;
    }
}
