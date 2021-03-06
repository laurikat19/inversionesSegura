<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipio $municipio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $municipio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="municipios form content">
            <?= $this->Form->create($municipio) ?>
            <fieldset>
                <legend><?= __('Edit Municipio') ?></legend>
                <?php
                    echo $this->Form->control('departamento_id', ['options' => $departamentos]);
                    echo $this->Form->control('codigo');
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
