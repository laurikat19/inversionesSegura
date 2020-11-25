<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sucursales Model
 *
 * @property \App\Model\Table\DepartamentosTable&\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\MunicipiosTable&\Cake\ORM\Association\BelongsTo $Municipios
 *
 * @method \App\Model\Entity\Sucursale newEmptyEntity()
 * @method \App\Model\Entity\Sucursale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sucursale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sucursale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SucursalesTable extends Table
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

        $this->setTable('sucursales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Municipios', [
            'foreignKey' => 'municipio_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 30)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 12)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

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
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'), ['errorField' => 'departamento_id']);
        $rules->add($rules->existsIn(['municipio_id'], 'Municipios'), ['errorField' => 'municipio_id']);

        return $rules;
    }
}
