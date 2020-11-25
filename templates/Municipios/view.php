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
            <?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Municipio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="municipios view content">
            <h3><?= h($municipio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $municipio->has('departamento') ? $this->Html->link($municipio->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $municipio->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($municipio->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($municipio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= $this->Number->format($municipio->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($municipio->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($municipio->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sucursales') ?></h4>
                <?php if (!empty($municipio->sucursales)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Telefono') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th><?= __('Municipio Id') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($municipio->sucursales as $sucursales) : ?>
                        <tr>
                            <td><?= h($sucursales->id) ?></td>
                            <td><?= h($sucursales->direccion) ?></td>
                            <td><?= h($sucursales->telefono) ?></td>
                            <td><?= h($sucursales->departamento_id) ?></td>
                            <td><?= h($sucursales->municipio_id) ?></td>
                            <td><?= h($sucursales->created_at) ?></td>
                            <td><?= h($sucursales->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sucursales', 'action' => 'view', $sucursales->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sucursales', 'action' => 'edit', $sucursales->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sucursales', 'action' => 'delete', $sucursales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursales->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($municipio->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Identificacion') ?></th>
                            <th><?= __('Fecha Expedicion') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Apellido') ?></th>
                            <th><?= __('Telefono') ?></th>
                            <th><?= __('Fecha Nacimiento') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Email Verified At') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th><?= __('Municipio Id') ?></th>
                            <th><?= __('Remember Token') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($municipio->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->identificacion) ?></td>
                            <td><?= h($users->fecha_expedicion) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->apellido) ?></td>
                            <td><?= h($users->telefono) ?></td>
                            <td><?= h($users->fecha_nacimiento) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->email_verified_at) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->direccion) ?></td>
                            <td><?= h($users->departamento_id) ?></td>
                            <td><?= h($users->municipio_id) ?></td>
                            <td><?= h($users->remember_token) ?></td>
                            <td><?= h($users->created_at) ?></td>
                            <td><?= h($users->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
