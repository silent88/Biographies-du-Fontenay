<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\I18n\Date;

/**
 * Event FuzzyDateRange
 *
 * @property string $FuzzyDateBeginDay
 * @property string $FuzzyDateBeginMonth
 * @property string $FuzzyDateBeginYear
 * @property string $FuzzyDateEndDay
 * @property string $FuzzyDateEndMonth
 * @property string $FuzzyDateEndYear
 */
class FuzzyDateRange extends Entity
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
        '*' => true
    ];
	
	/**
	 * Access DateBegin
	 * 
	 * @var Date
	 */
	 public function _getDateBegin()
	 {
	 	$d = new Date();
		$r_b_day = '';
		$r_b_month = '';
		$r_b_year = $this->FuzzyDateBeginYear;
		 
		if ($this->FuzzyDateBeginDay=='?' and $this->FuzzyDateBeginMonth=='?') {
			$r_b_day = '01';
			$r_b_month = '01';
		}		
		else if ($this->FuzzyDateBeginDay=='?' and ($this->FuzzyDateBeginMonth <> '?')) {
			$r_b_day = '01';
			$r_b_month = $this->FuzzyDateBeginMonth;
		}
		else {
			$r_b_day = $this->FuzzyDateBeginDay;
			$r_b_month = $this->FuzzyDateBeginMonth;
		}
		
		$d->setDate($r_b_year, $r_b_month, $r_b_day);
		
	 	return $d;
	 }
	 
 	/**
	 * Access DateEnd
	 * 
	 * @var Date
	 */
	 public function _getDateEnd()
	 {
	 	$d = new Date();
		$r_e_day = '';
		$r_e_month = '';
		$r_e_year = $this->FuzzyDateEndYear;
		 
		if ($this->FuzzyDateEndDay=='?' and $this->FuzzyDateEndMonth=='?') {
			$r_e_day = '31';
			$r_e_month = '12';
			//echo "1st if " . $this->FuzzyDateEndDay . " " . $this->FuzzyDateEndMonth;
		} 
		else if ($this->FuzzyDateEndDay=='?' and ($this->FuzzyDateEndMonth <> '?')) {
			
			//echo "2nd if";
			
			if ($this->FuzzyDateEndMonth == '12') {
				$r_e_day = '31';
				$r_e_month = '12';
			} else {
				$d->setDate($r_e_year, $this->FuzzyDateEndMonth + 1, 1);
				$d->subDays(1);
				return $d;
			}
			
		}
		else {
			$r_e_day = $this->FuzzyDateEndDay;
			$r_e_month = $this->FuzzyDateEndMonth;
			//echo "3rd if";
		}

		$d->setDate($r_e_year, $r_e_month, $r_e_day);
		
	 	return $d;
	 }
	 
	/**
	 * Access Years
	 * 
	 * @var string
	 */
	 public function _getYears()
	 {
	 	$s = "";
	 	/*
	 	if ($this->FuzzyDateBeginYear == $this->FuzzyDateEndYear) {
	 		return $this->FuzzyDateBeginYear;
	 	} else {
	 		return $this->FuzzyDateBeginYear . ".." . $this->FuzzyDateEndYear;
	 	}
		*/
		 
		for ($x = $this->FuzzyDateBeginYear; $x <= $this->FuzzyDateEndYear; $x++) {
			$s = $s . "," . $x;
		}
		return $s;
	 }
}
