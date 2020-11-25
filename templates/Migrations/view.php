<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Migration $migration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Migration'), ['action' => 'edit', $migration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Migration'), ['action' => 'delete', $migration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $migration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Migrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Migration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="migrations view content">
            <h3><?= h($migration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Migration') ?></th>
                    <td><?= h($migration->migration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($migration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch') ?></th>
                    <td><?= $this->Number->format($migration->batch) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
