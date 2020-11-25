<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModelHasRole[]|\Cake\Collection\CollectionInterface $modelHasRoles
 */
?>
<div class="modelHasRoles index content">
    <?= $this->Html->link(__('New Model Has Role'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Model Has Roles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('model_type') ?></th>
                    <th><?= $this->Paginator->sort('model_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelHasRoles as $modelHasRole): ?>
                <tr>
                    <td><?= $modelHasRole->has('role') ? $this->Html->link($modelHasRole->role->name, ['controller' => 'Roles', 'action' => 'view', $modelHasRole->role->id]) : '' ?></td>
                    <td><?= h($modelHasRole->model_type) ?></td>
                    <td><?= $this->Number->format($modelHasRole->model_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $modelHasRole->role_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modelHasRole->role_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modelHasRole->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasRole->role_id)]) ?>
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
