<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="permissions view content">
            <h3><?= h($permission->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($permission->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guard Name') ?></th>
                    <td><?= h($permission->guard_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($permission->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($permission->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($permission->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Model Has Permissions') ?></h4>
                <?php if (!empty($permission->model_has_permissions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Permission Id') ?></th>
                            <th><?= __('Model Type') ?></th>
                            <th><?= __('Model Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($permission->model_has_permissions as $modelHasPermissions) : ?>
                        <tr>
                            <td><?= h($modelHasPermissions->permission_id) ?></td>
                            <td><?= h($modelHasPermissions->model_type) ?></td>
                            <td><?= h($modelHasPermissions->model_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ModelHasPermissions', 'action' => 'view', $modelHasPermissions->permission_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ModelHasPermissions', 'action' => 'edit', $modelHasPermissions->permission_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ModelHasPermissions', 'action' => 'delete', $modelHasPermissions->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasPermissions->permission_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Role Has Permissions') ?></h4>
                <?php if (!empty($permission->role_has_permissions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Permission Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($permission->role_has_permissions as $roleHasPermissions) : ?>
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
