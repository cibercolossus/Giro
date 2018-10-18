<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * License Entity
 *
 * @property int $id
 * @property string $number
 * @property string $categories
 * @property bool $fines
 * @property string $front
 * @property string $reverse
 * @property int $character_id
 *
 * @property \App\Model\Entity\Character $character
 */
class License extends Entity
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