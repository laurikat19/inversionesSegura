<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipio Entity
 *
 * @property int $id
 * @property int $departamento_id
 * @property int $codigo
 * @property string $nombre
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Sucursale[] $sucursales
 * @property \App\Model\Entity\User[] $users
 */
class Municipio extends Entity
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
        'departamento_id' => true,
        'codigo' => true,
        'nombre' => true,
        'created_at' => true,
        'updated_at' => true,
        'departamento' => true,
        'sucursales' => true,
        'users' => true,
    ];
}
