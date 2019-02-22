<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrnDailyReport Entity
 *
 * @property int $daily_id
 * @property int $report_id
 *
 * @property \App\Model\Entity\Report $report
 * @property \App\Model\Entity\Daily $daily
 */
class TrnDailyReport extends Entity
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
        'daily' => true
    ];
}
