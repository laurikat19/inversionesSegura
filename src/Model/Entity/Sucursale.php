<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sucursale Entity
 *
 * @property int $id
 * @property string $direccion
 * @property string $telefono
 * @property int $departamento_id
 * @property int $municipio_id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Municipio $municipio
 */
class Sucursale extends Entity
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
        'direccion' => true,
        'telefono' => true,
        'departamento_id' => true,
        'municipio_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'departamento' => true,
        'municipio' => true,
    ];
}
