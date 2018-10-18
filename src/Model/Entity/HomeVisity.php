<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeVisity Entity
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $last_name
 * @property string $cc
 * @property string $phone
 * @property string $phone2
 * @property string $address
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $client_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\AcademicInformation[] $academic_information
 * @property \App\Model\Entity\Character $character
 * @property \App\Model\Entity\Concept[] $concepts
 * @property \App\Model\Entity\Economy[] $economies
 * @property \App\Model\Entity\Family[] $families
 * @property \App\Model\Entity\Job[] $jobs
 * @property \App\Model\Entity\Photography[] $photographies
 * @property \App\Model\Entity\Sector[] $sectors
 * @property \App\Model\Entity\SocialAspect[] $social_aspects
 * @property \App\Model\Entity\UserVisity[] $user_visities
 */
class HomeVisity extends Entity
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
        'code' => true,
        'name' => true,
        'last_name' => true,
        'cc' => true,
        'phone' => true,
        'phone2' => true,
        'address' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'client_id' => true,
        'user' => true,
        'client' => true,
        'academic_information' => true,
        'character' => true,
        'concepts' => true,
        'economies' => true,
        'family' => true,
        'jobs' => true,
        'photographies' => true,
        'sectors' => true,
        'social_aspects' => true,
        'user_visities' => true
    ];
}
