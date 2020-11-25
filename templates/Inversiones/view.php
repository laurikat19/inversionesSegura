<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inversione $inversione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inversione'), ['action' => 'edit', $inversione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inversione'), ['action' => 'delete', $inversione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inversione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inversiones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inversione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inversiones view content">
            <h3><?= h($inversione->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $inversione->has('user') ? $this->Html->link($inversione->user->name, ['controller' => 'Users', 'action' => 'view', $inversione->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Servicio') ?></th>
                    <td><?= $inversione->has('servicio') ? $this->Html->link($inversione->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $inversione->servicio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($inversione->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($inversione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($inversione->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($inversione->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($inversione->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
