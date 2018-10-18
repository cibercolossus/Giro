<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Study Entity
 *
 * @property int $id
 * @property string $studies
 * @property string $name_institution
 * @property string $obtained_title
 * @property \Cake\I18n\FrozenDate $date
 * @property string $city
 * @property string $registry_number
 * @property int $academic_information_id
 *
 * @property \App\Model\Entity\AcademicInformation $academic_information
 */
class Study extends Entity
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
