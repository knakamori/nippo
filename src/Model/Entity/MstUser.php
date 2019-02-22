<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MstUser Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_name
 * @property string $mail
 * @property string $password
 * @property int $group_id
 * @property int $rank_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Rank $rank
 */
class MstUser extends Entity
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
        'user_id' => true,
        'user_name' => true,
        'mail' => true,
        'password' => true,
        'group_id' => true,
        'rank_id' => true,
        'create_date' => true,
        'update_date' => true,
        'user' => true,
        'group' => true,
        'rank' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
