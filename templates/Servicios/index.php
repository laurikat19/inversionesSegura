<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio[]|\Cake\Collection\CollectionInterface $servicios
 */
?>
<div class="servicios index content">
    <?= $this->Html->link(__('New Servicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Servicios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicios as $servicio): ?>
                <tr>
                    <td><?= $this->Number->format($servicio->id) ?></td>
                    <td><?= h($servicio->nombre) ?></td>
                    <td><?= h($servicio->created_at) ?></td>
                    <td><?= h($servicio->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $servicio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?>
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
