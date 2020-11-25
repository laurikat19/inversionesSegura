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
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Identificacion') ?></th>
                    <td><?= h($user->identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($user->apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($user->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($user->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $user->has('departamento') ? $this->Html->link($user->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $user->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= $user->has('municipio') ? $this->Html->link($user->municipio->id, ['controller' => 'Municipios', 'action' => 'view', $user->municipio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Remember Token') ?></th>
                    <td><?= h($user->remember_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Expedicion') ?></th>
                    <td><?= h($user->fecha_expedicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Nacimiento') ?></th>
                    <td><?= h($user->fecha_nacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Verified At') ?></th>
                    <td><?= h($user->email_verified_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($user->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Inversiones') ?></h4>
                <?php if (!empty($user->inversiones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Servicios Id') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->inversiones as $inversiones) : ?>
                        <tr>
                            <td><?= h($inversiones->id) ?></td>
                            <td><?= h($inversiones->user_id) ?></td>
                            <td><?= h($inversiones->servicios_id) ?></td>
                            <td><?= h($inversiones->valor) ?></td>
                            <td><?= h($inversiones->estado) ?></td>
                            <td><?= h($inversiones->created_at) ?></td>
                            <td><?= h($inversiones->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Inversiones', 'action' => 'view', $inversiones->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Inversiones', 'action' => 'edit', $inversiones->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inversiones', 'action' => 'delete', $inversiones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inversiones->id)]) ?>
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
