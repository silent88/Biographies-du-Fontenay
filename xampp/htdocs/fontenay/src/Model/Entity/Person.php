<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property \Cake\I18n\Time $BirthDate
 * @property string $BirthHour
 * @property string $BirthPlace
 * @property string $BirthCountry
 * @property int $BirthTimeZone
 * @property \Cake\I18n\Time $DeathDate
 * @property string $DeathHour
 * @property string $DeathPlace
 * @property string $DeathCountry
 */
class Person extends Entity
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
        'id' => false
    ];
}
