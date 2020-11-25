<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamentos view content">
            <h3><?= h($departamento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($departamento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($departamento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= $this->Number->format($departamento->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($departamento->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($departamento->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Municipios') ?></h4>
                <?php if (!empty($departamento->municipios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($departamento->municipios as $municipios) : ?>
                        <tr>
                            <td><?= h($municipios->id) ?></td>
                            <td><?= h($municipios->departamento_id) ?></td>
                            <td><?= h($municipios->codigo) ?></td>
                            <td><?= h($municipios->nombre) ?></td>
                            <td><?= h($municipios->created_at) ?></td>
                            <td><?= h($municipios->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Municipios', 'action' => 'view', $municipios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Municipios', 'action' => 'edit', $municipios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Municipios', 'action' => 'delete', $municipios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sucursales') ?></h4>
                <?php if (!empty($departamento->sucursales)) : ?>
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
                        <?php foreach ($departamento->sucursales as $sucursales) : ?>
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
                <?php if (!empty($departamento->users)) : ?>
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
                        <?php foreach ($departamento->users as $users) : ?>
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
