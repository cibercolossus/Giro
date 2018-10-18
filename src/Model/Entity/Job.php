<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $company_name
 * @property string $last_position
 * @property \Cake\I18n\FrozenDate $entry
 * @property \Cake\I18n\FrozenDate $retirement
 * @property string $reason
 * @property string $immediate_boos
 * @property string $phone
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 */
class Job extends Entity
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
        'company_name' => true,
        'last_position' => true,
        'entry' => true,
        'retirement' => true,
        'reason' => true,
        'immediate_boos' => true,
        'phone' => true,
        'home_visity_id' => true,
        'home_visity' => true
    ];
}
