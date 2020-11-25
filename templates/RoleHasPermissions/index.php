<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleHasPermission[]|\Cake\Collection\CollectionInterface $roleHasPermissions
 */
?>
<div class="roleHasPermissions index content">
    <?= $this->Html->link(__('New Role Has Permission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Role Has Permissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('permission_id') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roleHasPermissions as $roleHasPermission): ?>
                <tr>
                    <td><?= $roleHasPermission->has('permission') ? $this->Html->link($roleHasPermission->permission->name, ['controller' => 'Permissions', 'action' => 'view', $roleHasPermission->permission->id]) : '' ?></td>
                    <td><?= $roleHasPermission->has('role') ? $this->Html->link($roleHasPermission->role->name, ['controller' => 'Roles', 'action' => 'view', $roleHasPermission->role->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $roleHasPermission->permission_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleHasPermission->permission_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleHasPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleHasPermission->permission_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
