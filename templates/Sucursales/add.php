<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sucursale $sucursale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sucursales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sucursales form content">
            <?= $this->Form->create($sucursale) ?>
            <fieldset>
                <legend><?= __('Add Sucursale') ?></legend>
                <?php
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('departamento_id', ['options' => $departamentos]);
                    echo $this->Form->control('municipio_id', ['options' => $municipios]);
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
