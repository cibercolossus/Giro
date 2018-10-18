<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inspection Entity
 *
 * @property int $id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $client_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Result[] $results
 */
class Inspection extends Entity
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
        'status' => true,
        'created' => true,
        'modified' => true,
        'client_id' => true,
        'client' => true,
        'results' => true
    ];
}
