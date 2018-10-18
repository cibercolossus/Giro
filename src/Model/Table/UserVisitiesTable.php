<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserVisities Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\HomeVisitiesTable|\Cake\ORM\Association\BelongsTo $HomeVisities
 *
 * @method \App\Model\Entity\UserVisity get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserVisity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserVisity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserVisity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserVisity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserVisity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserVisity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserVisity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserVisitiesTable extends Table
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

        $this->setTable('user_visities');
        $this->setDisplayField('created');
        $this->setPrimaryKey(['user_id', 'home_visity_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HomeVisities', [
            'foreignKey' => 'home_visity_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['home_visity_id'], 'HomeVisities'));

        return $rules;
    }
}
