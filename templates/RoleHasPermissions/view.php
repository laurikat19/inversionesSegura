<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleHasPermission $roleHasPermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role Has Permission'), ['action' => 'edit', $roleHasPermission->permission_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role Has Permission'), ['action' => 'delete', $roleHasPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleHasPermission->permission_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Role Has Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role Has Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleHasPermissions view content">
            <h3><?= h($roleHasPermission->permission_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Permission') ?></th>
                    <td><?= $roleHasPermission->has('permission') ? $this->Html->link($roleHasPermission->permission->name, ['controller' => 'Permissions', 'action' => 'view', $roleHasPermission->permission->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $roleHasPermission->has('role') ? $this->Html->link($roleHasPermission->role->name, ['controller' => 'Roles', 'action' => 'view', $roleHasPermission->role->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
