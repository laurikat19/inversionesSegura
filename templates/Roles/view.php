<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roles view content">
            <h3><?= h($role->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($role->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guard Name') ?></th>
                    <td><?= h($role->guard_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($role->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($role->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($role->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Model Has Roles') ?></h4>
                <?php if (!empty($role->model_has_roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Model Type') ?></th>
                            <th><?= __('Model Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->model_has_roles as $modelHasRoles) : ?>
                        <tr>
                            <td><?= h($modelHasRoles->role_id) ?></td>
                            <td><?= h($modelHasRoles->model_type) ?></td>
                            <td><?= h($modelHasRoles->model_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ModelHasRoles', 'action' => 'view', $modelHasRoles->role_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ModelHasRoles', 'action' => 'edit', $modelHasRoles->role_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ModelHasRoles', 'action' => 'delete', $modelHasRoles->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasRoles->role_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Role Has Permissions') ?></h4>
                <?php if (!empty($role->role_has_permissions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Permission Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->role_has_permissions as $roleHasPermissions) : ?>
                        <tr>
                            <td><?= h($roleHasPermissions->permission_id) ?></td>
                            <td><?= h($roleHasPermissions->role_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RoleHasPermissions', 'action' => 'view', $roleHasPermissions->permission_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RoleHasPermissions', 'action' => 'edit', $roleHasPermissions->permission_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoleHasPermissions', 'action' => 'delete', $roleHasPermissions->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleHasPermissions->permission_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
