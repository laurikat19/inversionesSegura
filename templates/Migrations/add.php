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
            <?= $this->Html->link(__('List Migrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="migrations form content">
            <?= $this->Form->create($migration) ?>
            <fieldset>
                <legend><?= __('Add Migration') ?></legend>
                <?php
                    echo $this->Form->control('migration');
                    echo $this->Form->control('batch');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
