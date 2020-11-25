<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FailedJobs Model
 *
 * @method \App\Model\Entity\FailedJob newEmptyEntity()
 * @method \App\Model\Entity\FailedJob newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FailedJob[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FailedJob get($primaryKey, $options = [])
 * @method \App\Model\Entity\FailedJob findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FailedJob patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FailedJob[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FailedJob|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FailedJob saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FailedJob[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FailedJob[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FailedJob[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FailedJob[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FailedJobsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('failed_jobs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('connection')
            ->requirePresence('connection', 'create')
            ->notEmptyString('connection');

        $validator
            ->scalar('queue')
            ->requirePresence('queue', 'create')
            ->notEmptyString('queue');

        $validator
            ->scalar('payload')
            ->maxLength('payload', 4294967295)
            ->requirePresence('payload', 'create')
            ->notEmptyString('payload');

        $validator
            ->scalar('exception')
            ->maxLength('exception', 4294967295)
            ->requirePresence('exception', 'create')
            ->notEmptyString('exception');

        $validator
            ->dateTime('failed_at')
            ->notEmptyDateTime('failed_at');

        return $validator;
    }
}
