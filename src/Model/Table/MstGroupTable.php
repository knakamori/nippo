<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstGroup Model
 *
 * @method \App\Model\Entity\MstGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstGroup|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class MstGroupTable extends Table
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

        $this->setTable('mst_group');
        $this->setDisplayField('group_id');
        $this->setPrimaryKey('group_id');
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
            ->integer('group_id')
            ->allowEmpty('group_id', 'create');

        $validator
            ->scalar('group_name')
            ->maxLength('group_name', 255)
            ->requirePresence('group_name', 'create')
            ->notEmpty('group_name');

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
