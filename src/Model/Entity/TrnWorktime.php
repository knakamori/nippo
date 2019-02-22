<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrnWorktime Entity
 *
 * @property int $id
 * @property int $report_id
 * @property int $month
 * @property int $day
 * @property int $start_time
 * @property int $end_time
 * @property int $break_time
 * @property int $status
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Report $report
 * @property \App\Model\Entity\User $user
 */
class TrnWorktime extends Entity
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
        'report_id' => true,
        'month' => true,
        'day' => true,
        'start_time' => true,
        'end_time' => true,
        'break_time' => true,
        'status' => true,
        'user_id' => true,
        'create_date' => true,
        'update_date' => true,
        'report' => true,
        'user' => true
    ];
}
