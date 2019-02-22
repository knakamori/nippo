<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrnDailyReport Model
 *
 * @property \App\Model\Table\DailiesTable|\Cake\ORM\Association\BelongsTo $Dailies
 * @property \App\Model\Table\ReportsTable|\Cake\ORM\Association\BelongsTo $Reports
 *
 * @method \App\Model\Entity\TrnDailyReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrnDailyReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrnDailyReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnDailyReport|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnDailyReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrnDailyReport findOrCreate($search, callable $callback = null, $options = [])
 */
class TrnDailyReportTable extends Table
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

        $this->setTable('trn_daily_report');
        $this->setDisplayField('daily_id');
        $this->setPrimaryKey(['daily_id', 'report_id']);

        $this->belongsTo('Dailies', [
            'foreignKey' => 'daily_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Reports', [
            'foreignKey' => 'report_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('report')
            ->allowEmpty('report');

        return $validator;
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
        $rules->add($rules->existsIn(['report_id'], 'Reports'));

        return $rules;
    }
}
