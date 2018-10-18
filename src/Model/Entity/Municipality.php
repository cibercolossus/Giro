<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipality Entity
 *
 * @property int $id
 * @property string $municipality
 * @property int $departament_id
 *
 * @property \App\Model\Entity\Departament $departament
 * @property \App\Model\Entity\Sector[] $sectors
 */
class Municipality extends Entity
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
        'municipality' => true,
        'departament_id' => true,
        'departament' => true,
        'sectors' => true
    ];
}
