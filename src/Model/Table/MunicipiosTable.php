<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipios Model
 *
 * @property \App\Model\Table\DepartamentosTable&\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\SucursalesTable&\Cake\ORM\Association\HasMany $Sucursales
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Municipio newEmptyEntity()
 * @method \App\Model\Entity\Municipio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Municipio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Municipio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Municipio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Municipio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Municipio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Municipio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Municipio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MunicipiosTable extends Table
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

        $this->setTable('municipios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Sucursales', [
            'foreignKey' => 'municipio_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'municipio_id',
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
            ->integer('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

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

        return $rules;
    }
}
