<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('identificacion');
                    echo $this->Form->control('fecha_expedicion');
                    echo $this->Form->control('name');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('fecha_nacimiento');
                    echo $this->Form->control('email');
                    echo $this->Form->control('email_verified_at');
                    echo $this->Form->control('password');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('departamento_id', ['options' => $departamentos]);
                    echo $this->Form->control('municipio_id', ['options' => $municipios]);
                    echo $this->Form->control('remember_token');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
