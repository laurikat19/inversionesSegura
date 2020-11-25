<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inversione Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $servicios_id
 * @property float $valor
 * @property string $estado
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Servicio $servicio
 */
class Inversione extends Entity
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
        'user_id' => true,
        'servicios_id' => true,
        'valor' => true,
        'estado' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'servicio' => true,
    ];
}
