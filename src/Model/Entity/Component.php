<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Component Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $system_id
 *
 * @property \App\Model\Entity\System $system
 * @property \App\Model\Entity\Element[] $elements
 * @property \App\Model\Entity\Result[] $results
 */
class Component extends Entity
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
        'name' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'system_id' => true,
        'system' => true,
        'elements' => true,
        'results' => true
    ];
}
