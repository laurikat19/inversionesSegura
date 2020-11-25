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
            <?= $this->Html->link(__('List Model Has Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelHasRoles form content">
            <?= $this->Form->create($modelHasRole) ?>
            <fieldset>
                <legend><?= __('Add Model Has Role') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
