<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inversione[]|\Cake\Collection\CollectionInterface $inversiones
 */
?>
<div class="inversiones index content">
    <?= $this->Html->link(__('New Inversione'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inversiones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('servicios_id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inversiones as $inversione): ?>
                <tr>
                    <td><?= $this->Number->format($inversione->id) ?></td>
                    <td><?= $inversione->has('user') ? $this->Html->link($inversione->user->name, ['controller' => 'Users', 'action' => 'view', $inversione->user->id]) : '' ?></td>
                    <td><?= $inversione->has('servicio') ? $this->Html->link($inversione->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $inversione->servicio->id]) : '' ?></td>
                    <td><?= $this->Number->format($inversione->valor) ?></td>
                    <td><?= h($inversione->estado) ?></td>
                    <td><?= h($inversione->created_at) ?></td>
                    <td><?= h($inversione->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inversione->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inversione->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inversione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inversione->id)]) ?>
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
