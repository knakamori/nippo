<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrnWeeklyReport Model
 *
 * @property \App\Model\Table\WeekliesTable|\Cake\ORM\Association\BelongsTo $Weeklies
 * @property \App\Model\Table\ReportsTable|\Cake\ORM\Association\BelongsTo $Reports
 *
 * @method \App\Model\Entity\TrnWeeklyReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrnWeeklyReport findOrCreate($search, callable $callback = null, $options = [])
 */
class TrnWeeklyReportTable extends Table
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

        $this->setTable('trn_weekly_report');
        $this->setDisplayField('weekly_id');
        $this->setPrimaryKey(['weekly_id', 'report_id']);

        $this->belongsTo('Weeklies', [
            'foreignKey' => 'weekly_id',
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
        $rules->add($rules->existsIn(['weekly_id'], 'Weeklies'));
        $rules->add($rules->existsIn(['report_id'], 'Reports'));

        return $rules;
    }
}
