<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Characters Model
 *
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 * @property \App\Model\Table\DeparturesTable|\Cake\ORM\Association\HasMany $Departures
 * @property \App\Model\Table\LicensesTable|\Cake\ORM\Association\HasMany $Licenses
 * @property \App\Model\Table\NotebooksTable|\Cake\ORM\Association\HasMany $Notebooks
 * @property \App\Model\Table\PassportsTable|\Cake\ORM\Association\HasMany $Passports
 *
 * @method \App\Model\Entity\Character get($primaryKey, $options = [])
 * @method \App\Model\Entity\Character newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Character[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Character|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Character|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Character patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Character[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Character findOrCreate($search, callable $callback = null, $options = [])
 */
class CharactersTable extends Table
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

        $this->setTable('characters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Proffer.Proffer', [
        'photo' => [    // The name of your upload field
            'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
            'dir' => 'photo_dir',   // The name of the field to store the folder
            'thumbnailSizes' => [ // Declare your thumbnails
                'square' => [   // Define the prefix of your thumbnail
                    'w' => 300, // Width
                    'h' => 300, // Height
                    'crop' => true,
                    'jpeg_quality'  => 100
                ]
            ],
            'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
        ]
    ]);


        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Departures', [
            'foreignKey' => 'character_id'
        ]);
        $this->hasOne('Licenses', [
            'foreignKey' => 'character_id'
        ]);
        $this->hasOne('Notebooks', [
            'foreignKey' => 'character_id'
        ]);
        $this->hasOne('Passports', [
            'foreignKey' => 'character_id'
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
            ->scalar('birth_place')
            ->maxLength('birth_place', 255)
            ->requirePresence('birth_place', 'create')
            ->notEmpty('birth_place');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->date('birth_date')
            ->requirePresence('birth_date', 'create')
            ->notEmpty('birth_date');

        $validator
            ->scalar('expedition_place')
            ->maxLength('expedition_place', 255)
            ->requirePresence('expedition_place', 'create')
            ->notEmpty('expedition_place');

        $validator
            ->date('expedition_date')
            ->requirePresence('expedition_date', 'create')
            ->notEmpty('expedition_date');

        $validator
            ->scalar('blood_type')
            ->maxLength('blood_type', 255)
            ->requirePresence('blood_type', 'create')
            ->notEmpty('blood_type');

        $validator
            ->decimal('height')
            ->requirePresence('height', 'create')
            ->notEmpty('height');

        $validator
            ->scalar('particular_signs')
            ->maxLength('particular_signs', 255)
            ->requirePresence('particular_signs', 'create')
            ->notEmpty('particular_signs');

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 255)
            ->requirePresence('nickname', 'create')
            ->notEmpty('nickname');

        $validator
            ->scalar('civil_status')
            ->maxLength('civil_status', 255)
            ->requirePresence('civil_status', 'create')
            ->notEmpty('civil_status');

        $validator
            ->integer('time')
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('observations_personal_information')
            ->requirePresence('observations_personal_information', 'create')
            ->notEmpty('observations_personal_information');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');
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
        //$rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['home_visity_id'], 'HomeVisities'));

        return $rules;
    }
}
