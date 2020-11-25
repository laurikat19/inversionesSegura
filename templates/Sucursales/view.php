<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sucursale $sucursale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sucursale'), ['action' => 'edit', $sucursale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sucursale'), ['action' => 'delete', $sucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sucursales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sucursale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sucursales view content">
            <h3><?= h($sucursale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($sucursale->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($sucursale->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $sucursale->has('departamento') ? $this->Html->link($sucursale->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $sucursale->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= $sucursale->has('municipio') ? $this->Html->link($sucursale->municipio->id, ['controller' => 'Municipios', 'action' => 'view', $sucursale->municipio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sucursale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($sucursale->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($sucursale->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
