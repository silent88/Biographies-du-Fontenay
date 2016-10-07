<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HighlightsLayer Entity
 *
 * @property int $id
 * @property int $layer_id
 * @property int $highlight_id
 *
 * @property \App\Model\Entity\Layer $layer
 * @property \App\Model\Entity\Highlight $highlight
 */
class HighlightsLayer extends Entity
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
