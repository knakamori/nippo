<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstWork Model
 *
 * @method \App\Model\Entity\MstWork get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstWork newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstWork[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstWork|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstWork|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstWork patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstWork[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstWork findOrCreate($search, callable $callback = null, $options = [])
 */
class MstWorkTable extends Table
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

        $this->setTable('mst_work');
        $this->setDisplayField('work_id');
        $this->setPrimaryKey('work_id');
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
            ->integer('work_id')
            ->allowEmpty('work_id', 'create');

        $validator
            ->scalar('work_name')
            ->maxLength('work_name', 255)
            ->requirePresence('work_name', 'create')
            ->notEmpty('work_name');

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
