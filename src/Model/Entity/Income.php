<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Income Entity
 *
 * @property int $id
 * @property string $monthly_income
 * @property float $value
 * @property int $total
 * @property int $economy_id
 *
 * @property \App\Model\Entity\Economy $economy
 */
class Income extends Entity
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
        'monthly_income' => true,
        'value' => true,
        'total' => true,
        'economy_id' => true,
        'economy' => true
    ];
}
