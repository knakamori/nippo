<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrnDailyWork Model
 *
 * @property \App\Model\Table\DailiesTable|\Cake\ORM\Association\BelongsTo $Dailies
 * @property \App\Model\Table\WorksTable|\Cake\ORM\Association\BelongsTo $Works
 *
 * @method \App\Model\Entity\TrnDailyWork get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrnDailyWork newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrnDailyWork[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyWork|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnDailyWork|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnDailyWork patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyWork[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyWork findOrCreate($search, callable $callback = null, $options = [])
 */
class TrnDailyWorkTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('trn_daily_work');
        $this->setDisplayField('daily_id');
        $this->setPrimaryKey(['daily_id', 'work_id']);

        $this->belongsTo('Dailies', [
            'foreignKey' => 'daily_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Works', [
            'foreignKey' => 'work_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['daily_id'], 'Dailies'));
        $rules->add($rules->existsIn(['work_id'], 'Works'));

        return $rules;
    }
}
