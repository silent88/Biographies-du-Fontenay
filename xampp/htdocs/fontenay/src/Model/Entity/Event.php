<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property string $idEvent
 * @property string $FuzzyDateBeginDay
 * @property string $FuzzyDateBeginMonth
 * @property string $FuzzyDateBeginYear
 * @property string $FuzzyDateEndDay
 * @property string $FuzzyDateEndMonth
 * @property string $FuzzyDateEndYear
 * @property string $Title
 * @property string $Description
 * @property string $ResonanceLevel
 * @property string $person_id
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
	
	/**
	 * Virtual Field: FuzzyDateBegin
	 * 
	 * @var string
	 */
	 protected function _getFuzzyDateBegin()
	 {
	 	return "" . $this->FuzzyDateBeginYear . '.' . $this->FuzzyDateBeginMonth . '.' . $this->FuzzyDateBeginDay;
	 }
	 
	/**
	 * Virtual Field: FuzzyDateBegin
	 * 
	 * @var string
	 */
	 protected function _getFuzzyDateEnd()
	 {
	 	return "" . $this->FuzzyDateEndYear . '.' . $this->FuzzyDateEndMonth . '.' . $this->FuzzyDateEndDay;
	 }
	 
	/**
	 * Virtual Field: Age
	 * @TODO
	 * 
	 * @var string
	 */
	 protected function _getAge()
	 {
	 	return '12..14';
	 }
}
