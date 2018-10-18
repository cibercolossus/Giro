<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CloseRelative Entity
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $relationship
 * @property int $age
 * @property string $cc
 * @property string $occupation
 * @property string $phone
 * @property int $family_id
 *
 * @property \App\Model\Entity\Family $family
 */
class CloseRelative extends Entity
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
        
        '*' => true,
        'id' => false
    ];
}
