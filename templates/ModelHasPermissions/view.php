<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModelHasPermission $modelHasPermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Model Has Permission'), ['action' => 'edit', $modelHasPermission->permission_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Model Has Permission'), ['action' => 'delete', $modelHasPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasPermission->permission_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Model Has Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Model Has Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelHasPermissions view content">
            <h3><?= h($modelHasPermission->permission_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Permission') ?></th>
                    <td><?= $modelHasPermission->has('permission') ? $this->Html->link($modelHasPermission->permission->name, ['controller' => 'Permissions', 'action' => 'view', $modelHasPermission->permission->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Model Type') ?></th>
                    <td><?= h($modelHasPermission->model_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model Id') ?></th>
                    <td><?= $this->Number->format($modelHasPermission->model_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
