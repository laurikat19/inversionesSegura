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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleHasPermission->permission_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleHasPermission->permission_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Role Has Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleHasPermissions form content">
            <?= $this->Form->create($roleHasPermission) ?>
            <fieldset>
                <legend><?= __('Edit Role Has Permission') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
