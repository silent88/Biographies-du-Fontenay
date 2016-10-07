<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TimeDimention Entity
 *
 * @property \Cake\I18n\Time $date
 * @property int $id
 * @property int $y
 * @property int $m
 * @property int $d
 * @property int $yw
 * @property int $w
 * @property int $q
 * @property int $wd
 * @property string $m_name
 * @property string $wd_name
 */
class TimeDimention extends Entity
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
