<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleHasPermission $roleHasPermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Role Has Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleHasPermissions form content">
            <?= $this->Form->create($roleHasPermission) ?>
            <fieldset>
                <legend><?= __('Add Role Has Permission') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
