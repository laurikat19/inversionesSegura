<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FailedJob[]|\Cake\Collection\CollectionInterface $failedJobs
 */
?>
<div class="failedJobs index content">
    <?= $this->Html->link(__('New Failed Job'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Failed Jobs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('failed_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($failedJobs as $failedJob): ?>
                <tr>
                    <td><?= $this->Number->format($failedJob->id) ?></td>
                    <td><?= h($failedJob->failed_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $failedJob->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $failedJob->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $failedJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $failedJob->id)]) ?>
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
