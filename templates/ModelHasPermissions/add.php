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
            <?= $this->Html->link(__('List Model Has Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelHasPermissions form content">
            <?= $this->Form->create($modelHasPermission) ?>
            <fieldset>
                <legend><?= __('Add Model Has Permission') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
