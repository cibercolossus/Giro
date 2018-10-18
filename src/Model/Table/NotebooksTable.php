<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notebooks Model
 *
 * @property \App\Model\Table\CharactersTable|\Cake\ORM\Association\BelongsTo $Characters
 *
 * @method \App\Model\Entity\Notebook get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notebook newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notebook[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notebook|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notebook|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notebook patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notebook[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notebook findOrCreate($search, callable $callback = null, $options = [])
 */
class NotebooksTable extends Table
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

        $this->setTable('notebooks');
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

        $this->belongsTo('Characters', [
            'foreignKey' => 'character_id',
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

   /*     $validator
            ->scalar('number')
            ->maxLength('number', 255)
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->scalar('class')
            ->maxLength('class', 255)
            ->requirePresence('class', 'create')
            ->notEmpty('class');

        $validator
            ->scalar('military_district')
            ->maxLength('military_district', 255)
            ->requirePresence('military_district', 'create')
            ->notEmpty('military_district');

        $validator
            ->scalar('front')
            ->maxLength('front', 255)
            ->requirePresence('front', 'create')
            ->notEmpty('front');
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
        $rules->add($rules->existsIn(['character_id'], 'Characters'));

        return $rules;
    }
}
