<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserVisity Entity
 *
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\HomeVisity $home_visity
 */
class UserVisity extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'user' => true,
        'home_visity' => true
    ];
}
