<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstRank Model
 *
 * @method \App\Model\Entity\MstRank get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstRank newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstRank[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstRank|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstRank|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstRank patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstRank[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstRank findOrCreate($search, callable $callback = null, $options = [])
 */
class MstRankTable extends Table
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

        $this->setTable('mst_rank');
        $this->setDisplayField('rank_id');
        $this->setPrimaryKey('rank_id');
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
            ->integer('rank_id')
            ->allowEmpty('rank_id', 'create');

        $validator
            ->scalar('rank_name')
            ->maxLength('rank_name', 255)
            ->requirePresence('rank_name', 'create')
            ->notEmpty('rank_name');

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
