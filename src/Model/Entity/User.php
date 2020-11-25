<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $identificacion
 * @property \Cake\I18n\FrozenDate $fecha_expedicion
 * @property string $name
 * @property string $apellido
 * @property string $telefono
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property string $email
 * @property \Cake\I18n\FrozenTime|null $email_verified_at
 * @property string $password
 * @property string $direccion
 * @property int $departamento_id
 * @property int $municipio_id
 * @property string|null $remember_token
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Municipio $municipio
 * @property \App\Model\Entity\Inversione[] $inversiones
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'identificacion' => true,
        'fecha_expedicion' => true,
        'name' => true,
        'apellido' => true,
        'telefono' => true,
        'fecha_nacimiento' => true,
        'email' => true,
        'email_verified_at' => true,
        'password' => true,
        'direccion' => true,
        'departamento_id' => true,
        'municipio_id' => true,
        'remember_token' => true,
        'created_at' => true,
        'updated_at' => true,
        'departamento' => true,
        'municipio' => true,
        'inversiones' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
