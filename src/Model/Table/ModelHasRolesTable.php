<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModelHasRoles Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ModelsTable&\Cake\ORM\Association\BelongsTo $Models
 *
 * @method \App\Model\Entity\ModelHasRole newEmptyEntity()
 * @method \App\Model\Entity\ModelHasRole newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ModelHasRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ModelHasRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\ModelHasRole findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ModelHasRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ModelHasRole[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ModelHasRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModelHasRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModelHasRole[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModelHasRole[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModelHasRole[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModelHasRole[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ModelHasRolesTable extends Table
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

        $this->setTable('model_has_roles');
        $this->setDisplayField('role_id');
        $this->setPrimaryKey(['role_id', 'model_id', 'model_type']);

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Models', [
            'foreignKey' => 'model_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('model_type')
            ->maxLength('model_type', 255)
            ->allowEmptyString('model_type', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['role_id'], 'Roles'), ['errorField' => 'role_id']);
        $rules->add($rules->existsIn(['model_id'], 'Models'), ['errorField' => 'model_id']);

        return $rules;
    }
}
