<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inversione $inversione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inversione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inversione->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inversiones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inversiones form content">
            <?= $this->Form->create($inversione) ?>
            <fieldset>
                <legend><?= __('Edit Inversione') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('servicios_id', ['options' => $servicios]);
                    echo $this->Form->control('valor');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
