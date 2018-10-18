<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Concept Entity
 *
 * @property int $id
 * @property string $neighbornhood
 * @property string $friends
 * @property string $family
 * @property string $characterization
 * @property string $visit
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 */
class Concept extends Entity
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
        'neighbornhood' => true,
        'friends' => true,
        'family' => true,
        'characterization' => true,
        'visit' => true,
        'home_visity_id' => true,
        'home_visity' => true
    ];
}
