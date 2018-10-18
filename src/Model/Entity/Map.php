<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Map Entity
 *
 * @property int $id
 * @property string $map
 * @property string $commune
 * @property int $sector_id
 *
 * @property \App\Model\Entity\Sector $sector
 */
class Map extends Entity
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
        'map' => true,
        'commune' => true,
        'sector_id' => true,
        'sector' => true
    ];
}
