<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departament Entity
 *
 * @property int $id
 * @property string $departament
 *
 * @property \App\Model\Entity\Municipality[] $municipalities
 * @property \App\Model\Entity\Sector[] $sectors
 */
class Departament extends Entity
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
        'departament' => true,
        'municipalities' => true,
        'sectors' => true
    ];
}
