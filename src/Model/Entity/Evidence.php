<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evidence Entity
 *
 * @property int $id
 * @property string $description
 * @property string $file
 * @property int $answer_id
 *
 * @property \App\Model\Entity\Answer $answer
 */
class Evidence extends Entity
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
        'description' => true,
        'file' => true,
        'answer_id' => true,
        'answer' => true
    ];
}
