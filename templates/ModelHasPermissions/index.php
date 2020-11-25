<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModelHasPermission[]|\Cake\Collection\CollectionInterface $modelHasPermissions
 */
?>
<div class="modelHasPermissions index content">
    <?= $this->Html->link(__('New Model Has Permission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Model Has Permissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('permission_id') ?></th>
                    <th><?= $this->Paginator->sort('model_type') ?></th>
                    <th><?= $this->Paginator->sort('model_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelHasPermissions as $modelHasPermission): ?>
                <tr>
                    <td><?= $modelHasPermission->has('permission') ? $this->Html->link($modelHasPermission->permission->name, ['controller' => 'Permissions', 'action' => 'view', $modelHasPermission->permission->id]) : '' ?></td>
                    <td><?= h($modelHasPermission->model_type) ?></td>
                    <td><?= $this->Number->format($modelHasPermission->model_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $modelHasPermission->permission_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modelHasPermission->permission_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modelHasPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasPermission->permission_id)]) ?>
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
