<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Character Entity
 *
 * @property int $id
 * @property string $birth_place
 * @property int $age
 * @property \Cake\I18n\FrozenDate $birth_date
 * @property string $expedition_place
 * @property \Cake\I18n\FrozenDate $expedition_date
 * @property string $blood_type
 * @property float $height
 * @property string $particular_signs
 * @property string $nickname
 * @property string $civil_status
 * @property int $time
 * @property string $email
 * @property string $observations_personal_information
 * @property string $photo
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 * @property \App\Model\Entity\Departure[] $departures
 * @property \App\Model\Entity\License[] $licenses
 * @property \App\Model\Entity\Notebook[] $notebooks
 * @property \App\Model\Entity\Passport[] $passports
 */
class Character extends Entity
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
        'id' => false,
        'photo_dir' => false
    ];
}
