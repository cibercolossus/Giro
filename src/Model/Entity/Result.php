<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $id
 * @property int $yes
 * @property int $no
 * @property int $na
 * @property string $qty_question
 * @property int $component_id
 * @property int $inspection_id
 *
 * @property \App\Model\Entity\Component $component
 * @property \App\Model\Entity\Inspection $inspection
 */
class Result extends Entity
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
        'yes' => true,
        'no' => true,
        'na' => true,
        'qty_question' => true,
        'component_id' => true,
        'inspection_id' => true,
        'component' => true,
        'inspection' => true
    ];
}
