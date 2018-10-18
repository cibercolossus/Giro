<?php
namespace App\Model\Table;

//use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;




/**
 * Users Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('SluggableMail');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('HomeVisities', [
            'foreignKey' => 'user_id'
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

        $validator
            ->scalar('cc')
            ->maxLength('cc', 20)
            ->requirePresence('cc', 'create')
            ->notEmpty('cc', 'Rellene este campo');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name', 'Rellene este campo');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name', 'Rellene este campo');

        $validator
            ->scalar('position')
            ->maxLength('position', 100)
            ->requirePresence('position', 'create')
            ->notEmpty('position', 'Rellene este campo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'Rellene este campo');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Rellene este campo');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone', 'Rellene este campo');

        $validator
            ->scalar('role')
            ->maxLength('role', 100)
            ->requirePresence('role', 'create')
            ->notEmpty('role', 'Rellene este campo');

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
        $rules->add($rules->isUnique(['email'], 'Ya existe un usuario con este correo electrónico.'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }

        public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'name', 'last_name', 'email', 'password', 'role', 'client_id'])
            ->where(['Users.active' => 1]);
        return $query;
    }
    public function recoverPassword($id)
    {
        $user = $this->get($id);
        return $user->password;
    }
    public function beforeDelete($event, $entity, $options)
    {
        if ($entity->role == 'admin')
        {
            return false;
        }
        return true;
    }
}
