<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $idEvent
 * @property string $FuzzyDateBeginDay
 * @property string $FuzzyDateBeginMonth
 * @property string $FuzzyDateBeginYear
 * @property string $FuzzyDateEndDay
 * @property string $FuzzyDateEndMonth
 * @property string $FuzzyDateEndYear
 * @property string $Title
 * @property string|resource $Description
 * @property string $ResonanceLevel
 */
class Event extends Entity
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
        'idEvent' => false
    ];
}
