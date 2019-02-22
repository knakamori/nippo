<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrnWeeklyReport Entity
 *
 * @property int $weekly_id
 * @property int $report_id
 *
 * @property \App\Model\Entity\Report $report
 * @property \App\Model\Entity\Weekly $weekly
 */
class TrnWeeklyReport extends Entity
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
        'report' => true,
        'weekly' => true
    ];
}
