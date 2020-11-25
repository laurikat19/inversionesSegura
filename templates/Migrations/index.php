<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Migration[]|\Cake\Collection\CollectionInterface $migrations
 */
?>
<div class="migrations index content">
    <?= $this->Html->link(__('New Migration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Migrations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('migration') ?></th>
                    <th><?= $this->Paginator->sort('batch') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($migrations as $migration): ?>
                <tr>
                    <td><?= $this->Number->format($migration->id) ?></td>
                    <td><?= h($migration->migration) ?></td>
                    <td><?= $this->Number->format($migration->batch) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $migration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $migration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $migration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $migration->id)]) ?>
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
