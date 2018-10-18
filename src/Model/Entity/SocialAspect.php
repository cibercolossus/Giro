<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialAspect Entity
 *
 * @property int $id
 * @property string $health
 * @property string $legal_status
 * @property string $social_report
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 */
class SocialAspect extends Entity
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
        'health' => true,
        'legal_status' => true,
        'social_report' => true,
        'home_visity_id' => true,
        'home_visity' => true
    ];
}
