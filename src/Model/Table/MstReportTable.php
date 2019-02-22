<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstReport Model
 *
 * @method \App\Model\Entity\MstReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstReport|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstReport findOrCreate($search, callable $callback = null, $options = [])
 */
class MstReportTable extends Table
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

        $this->setTable('mst_report');
        $this->setDisplayField('report_id');
        $this->setPrimaryKey('report_id');
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
            ->integer('report_id')
            ->allowEmpty('report_id', 'create');

        $validator
            ->scalar('report_name')
            ->maxLength('report_name', 255)
            ->requirePresence('report_name', 'create')
            ->notEmpty('report_name');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        return $validator;
    }
}
