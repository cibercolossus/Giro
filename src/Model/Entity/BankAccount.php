<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BankAccount Entity
 *
 * @property int $id
 * @property string $bank_name
 * @property string $account_type
 * @property int $economy_id
 *
 * @property \App\Model\Entity\Economy $economy
 */
class BankAccount extends Entity
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
        'bank_name' => true,
        'account_type' => true,
        'economy_id' => true,
        'economy' => true
    ];
}
