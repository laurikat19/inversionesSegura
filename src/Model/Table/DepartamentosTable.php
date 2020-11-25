<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamentos Model
 *
 * @property \App\Model\Table\MunicipiosTable&\Cake\ORM\Association\HasMany $Municipios
 * @property \App\Model\Table\SucursalesTable&\Cake\ORM\Association\HasMany $Sucursales
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Departamento newEmptyEntity()
 * @method \App\Model\Entity\Departamento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departamento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Departamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepartamentosTable extends Table
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

        $this->setTable('departamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Municipios', [
            'foreignKey' => 'departamento_id',
        ]);
        $this->hasMany('Sucursales', [
            'foreignKey' => 'departamento_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'departamento_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->integer('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
