<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permission Entity
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\ModelHasPermission[] $model_has_permissions
 * @property \App\Model\Entity\RoleHasPermission[] $role_has_permissions
 */
class Permission extends Entity
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
        'name' => true,
        'guard_name' => true,
        'created_at' => true,
        'updated_at' => true,
        'model_has_permissions' => true,
        'role_has_permissions' => true,
    ];
}
