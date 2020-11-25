<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento[]|\Cake\Collection\CollectionInterface $departamentos
 */
?>
<div class="departamentos index content">
    <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departamentos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departamentos as $departamento): ?>
                <tr>
                    <td><?= $this->Number->format($departamento->id) ?></td>
                    <td><?= h($departamento->nombre) ?></td>
                    <td><?= $this->Number->format($departamento->codigo) ?></td>
                    <td><?= h($departamento->created_at) ?></td>
                    <td><?= h($departamento->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $departamento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departamento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?>
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
