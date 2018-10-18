<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property int $control_id
 * @property string $answer
 *
 * @property \App\Model\Entity\Control $control
 * @property \App\Model\Entity\Evidence[] $evidences
 */
class Answer extends Entity
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
        'control_id' => true,
        'answer' => true,
        'control' => true,
        'evidences' => true
    ];
}
