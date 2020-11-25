<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FailedJob $failedJob
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Failed Job'), ['action' => 'edit', $failedJob->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Failed Job'), ['action' => 'delete', $failedJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $failedJob->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Failed Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Failed Job'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="failedJobs view content">
            <h3><?= h($failedJob->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($failedJob->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Failed At') ?></th>
                    <td><?= h($failedJob->failed_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Connection') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($failedJob->connection)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Queue') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($failedJob->queue)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Payload') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($failedJob->payload)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Exception') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($failedJob->exception)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
