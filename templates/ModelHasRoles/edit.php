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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modelHasRole->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modelHasRole->role_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Model Has Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelHasRoles form content">
            <?= $this->Form->create($modelHasRole) ?>
            <fieldset>
                <legend><?= __('Edit Model Has Role') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
