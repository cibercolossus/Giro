<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AcademicInformation Entity
 *
 * @property int $id
 * @property string $observations_Academic_information
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 * @property \App\Model\Entity\Study[] $studies
 */
class AcademicInformation extends Entity
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
