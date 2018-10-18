<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sector Entity
 *
 * @property int $id
 * @property int $departament_id
 * @property int $municipality_id
 * @property string $neighborhood
 * @property string $address
 * @property string $stratum
 * @property string $type
 * @property int $recidence_time
 * @property string $commune
 * @property string $risk_level
 * @property string $geographic_location
 * @property string $description_home
 * @property string $zone
 * @property bool $school
 * @property bool $supermarket
 * @property bool $pilice_estation
 * @property bool $hospitals
 * @property bool $parks
 * @property bool $colleges
 * @property bool $shops
 * @property bool $cai
 * @property bool $clinic
 * @property bool $parkland
 * @property bool $university
 * @property bool $mall
 * @property bool $center_christian
 * @property bool $church
 * @property bool $stadium
 * @property string $access_roads
 * @property string $transportation_service
 * @property string $relationship_neighbors
 * @property string $drug_dispensing
 * @property string $prostitution_zone
 * @property string $high_impact_area
 * @property string $presence_animals
 * @property string $sewage
 * @property string $dump
 * @property int $home_visity_id
 *
 * @property \App\Model\Entity\Departament $departament
 * @property \App\Model\Entity\Municipality $municipality
 * @property \App\Model\Entity\HomeVisity $home_visity
 * @property \App\Model\Entity\Map[] $maps
 */
class Sector extends Entity
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
        'departament_id' => true,
        'municipality_id' => true,
        'neighborhood' => true,
        'address' => true,
        'stratum' => true,
        'type' => true,
        'recidence_time' => true,
        'commune' => true,
        'risk_level' => true,
        'geographic_location' => true,
        'description_home' => true,
        'zone' => true,
        'school' => true,
        'supermarket' => true,
        'pilice_estation' => true,
        'hospitals' => true,
        'parks' => true,
        'colleges' => true,
        'shops' => true,
        'cai' => true,
        'clinic' => true,
        'parkland' => true,
        'university' => true,
        'mall' => true,
        'center_christian' => true,
        'church' => true,
        'stadium' => true,
        'access_roads' => true,
        'transportation_service' => true,
        'relationship_neighbors' => true,
        'drug_dispensing' => true,
        'prostitution_zone' => true,
        'high_impact_area' => true,
        'presence_animals' => true,
        'sewage' => true,
        'dump' => true,
        'home_visity_id' => true,
        'departament' => true,
        'municipality' => true,
        'home_visity' => true,
        'maps' => true
    ];
}
