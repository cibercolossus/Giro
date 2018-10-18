<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Economy Entity
 *
 * @property int $id
 * @property string $home_economics
 * @property string $current_credits
 * @property string $furniture
 * @property string $ummovables
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\HomeVisity $home_visity
 * @property \App\Model\Entity\BankAccount[] $bank_accounts
 * @property \App\Model\Entity\Expense[] $expenses
 * @property \App\Model\Entity\Income[] $income
 */
class Economy extends Entity
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
        'home_economics' => true,
        'current_credits' => true,
        'furniture' => true,
        'ummovables' => true,
        'home_visity_id' => true,
        'home_visity' => true,
        'bank_accounts' => true,
        'expenses' => true,
        'income' => true
    ];
}
