<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Migrations Model
 *
 * @method \App\Model\Entity\Migration newEmptyEntity()
 * @method \App\Model\Entity\Migration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Migration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Migration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Migration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Migration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Migration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Migration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Migration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Migration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Migration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Migration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Migration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MigrationsTable extends Table
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

        $this->setTable('migrations');
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('migration')
            ->maxLength('migration', 255)
            ->requirePresence('migration', 'create')
            ->notEmptyString('migration');

        $validator
            ->integer('batch')
            ->requirePresence('batch', 'create')
            ->notEmptyString('batch');

        return $validator;
    }
}
