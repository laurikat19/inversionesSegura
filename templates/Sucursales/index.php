<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sucursale[]|\Cake\Collection\CollectionInterface $sucursales
 */
?>
<div class="sucursales index content">
    <?= $this->Html->link(__('New Sucursale'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sucursales') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th><?= $this->Paginator->sort('municipio_id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sucursales as $sucursale): ?>
                <tr>
                    <td><?= $this->Number->format($sucursale->id) ?></td>
                    <td><?= h($sucursale->direccion) ?></td>
                    <td><?= h($sucursale->telefono) ?></td>
                    <td><?= $sucursale->has('departamento') ? $this->Html->link($sucursale->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $sucursale->departamento->id]) : '' ?></td>
                    <td><?= $sucursale->has('municipio') ? $this->Html->link($sucursale->municipio->id, ['controller' => 'Municipios', 'action' => 'view', $sucursale->municipio->id]) : '' ?></td>
                    <td><?= h($sucursale->created_at) ?></td>
                    <td><?= h($sucursale->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sucursale->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sucursale->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursale->id)]) ?>
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
