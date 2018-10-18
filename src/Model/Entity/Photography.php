<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photography Entity
 *
 * @property int $id
 * @property string $nomeclature
 * @property string $facade
 * @property string $candidate_family
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 */
class Photography extends Entity
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
        'nomeclature' => true,
        'facade' => true,
        'candidate_family' => true,
        'home_visity_id' => true,
        'home_visity' => true
    ];
}
