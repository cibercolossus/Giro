<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeVisities Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\AcademicInformationTable|\Cake\ORM\Association\HasMany $AcademicInformation
 * @property \App\Model\Table\CharactersTable|\Cake\ORM\Association\HasMany $Characters
 * @property \App\Model\Table\ConceptsTable|\Cake\ORM\Association\HasMany $Concepts
 * @property \App\Model\Table\EconomiesTable|\Cake\ORM\Association\HasMany $Economies
 * @property \App\Model\Table\FamiliesTable|\Cake\ORM\Association\HasMany $Families
 * @property \App\Model\Table\JobsTable|\Cake\ORM\Association\HasMany $Jobs
 * @property \App\Model\Table\PhotographiesTable|\Cake\ORM\Association\HasMany $Photographies
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\HasMany $Sectors
 * @property \App\Model\Table\SocialAspectsTable|\Cake\ORM\Association\HasMany $SocialAspects
 * @property \App\Model\Table\UserVisitiesTable|\Cake\ORM\Association\HasMany $UserVisities
 *
 * @method \App\Model\Entity\HomeVisity get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeVisity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeVisity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeVisity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeVisity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeVisity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeVisity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeVisity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HomeVisitiesTable extends Table
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

        $this->setTable('home_visities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasOne('AcademicInformation', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasOne('Characters', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('Concepts', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('Economies', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasOne('Families', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('Photographies', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('Sectors', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('SocialAspects', [
            'foreignKey' => 'home_visity_id'
        ]);
        $this->hasMany('UserVisities', [
            'foreignKey' => 'home_visity_id'
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
            ->scalar('code')
            ->maxLength('code', 50)
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('cc')
            ->maxLength('cc', 255)
            ->requirePresence('cc', 'create')
            ->notEmpty('cc');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 50)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('phone2')
            ->maxLength('phone2', 50)
            ->requirePresence('phone2', 'create')
            ->notEmpty('phone2');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('status')
            ->maxLength('status', 50)
            ->requirePresence('status', 'create')
            ->notEmpty('status');
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
