<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModelHasRole $modelHasRole
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Model Has Role'), ['action' => 'edit', $modelHasRole->role_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Model Has Role'), ['action' => 'delete', $modelHasRole->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasRole->role_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Model Has Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Model Has Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelHasRoles view content">
            <h3><?= h($modelHasRole->role_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $modelHasRole->has('role') ? $this->Html->link($modelHasRole->role->name, ['controller' => 'Roles', 'action' => 'view', $modelHasRole->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Model Type') ?></th>
                    <td><?= h($modelHasRole->model_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model Id') ?></th>
                    <td><?= $this->Number->format($modelHasRole->model_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
