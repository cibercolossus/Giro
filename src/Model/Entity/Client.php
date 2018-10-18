<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $nit
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Inspection[] $inspections
 */
class Client extends Entity
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
        'nit' => true,
        'name' => true,
        'phone' => true,
        'address' => true,
        'email' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'inspections' => true
    ];
}
