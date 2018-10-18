<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expense Entity
 *
 * @property int $id
 * @property int $rent
 * @property int $public_services
 * @property int $feeding
 * @property int $education
 * @property int $transport
 * @property int $recreation
 * @property int $credit_cards
 * @property int $phone_plan
 * @property int $scheduled_savings
 * @property int $family_support
 * @property int $credits
 * @property int $others
 * @property int $total
 * @property int $economy_id
 *
 * @property \App\Model\Entity\Economy $economy
 */
class Expense extends Entity
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
        'rent' => true,
        'public_services' => true,
        'feeding' => true,
        'education' => true,
        'transport' => true,
        'recreation' => true,
        'credit_cards' => true,
        'phone_plan' => true,
        'scheduled_savings' => true,
        'family_support' => true,
        'credits' => true,
        'others' => true,
        'total' => true,
        'economy_id' => true,
        'economy' => true
    ];
}
