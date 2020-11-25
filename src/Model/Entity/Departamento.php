<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamento Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $codigo
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Municipio[] $municipios
 * @property \App\Model\Entity\Sucursale[] $sucursales
 * @property \App\Model\Entity\User[] $users
 */
class Departamento extends Entity
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
        'nombre' => true,
        'codigo' => true,
        'created_at' => true,
        'updated_at' => true,
        'municipios' => true,
        'sucursales' => true,
        'users' => true,
    ];
}