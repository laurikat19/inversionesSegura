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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $failedJob->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $failedJob->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Failed Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="failedJobs form content">
            <?= $this->Form->create($failedJob) ?>
            <fieldset>
                <legend><?= __('Edit Failed Job') ?></legend>
                <?php
                    echo $this->Form->control('connection');
                    echo $this->Form->control('queue');
                    echo $this->Form->control('payload');
                    echo $this->Form->control('exception');
                    echo $this->Form->control('failed_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
