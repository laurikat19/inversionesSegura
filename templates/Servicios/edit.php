<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Servicios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicios form content">
            <?= $this->Form->create($servicio) ?>
            <fieldset>
                <legend><?= __('Edit Servicio') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
