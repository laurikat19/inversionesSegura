<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('identificacion') ?></th>
                    <th><?= $this->Paginator->sort('fecha_expedicion') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('apellido') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('email_verified_at') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th><?= $this->Paginator->sort('municipio_id') ?></th>
                    <th><?= $this->Paginator->sort('remember_token') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->identificacion) ?></td>
                    <td><?= h($user->fecha_expedicion) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->apellido) ?></td>
                    <td><?= h($user->telefono) ?></td>
                    <td><?= h($user->fecha_nacimiento) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->email_verified_at) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->direccion) ?></td>
                    <td><?= $user->has('departamento') ? $this->Html->link($user->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $user->departamento->id]) : '' ?></td>
                    <td><?= $user->has('municipio') ? $this->Html->link($user->municipio->id, ['controller' => 'Municipios', 'action' => 'view', $user->municipio->id]) : '' ?></td>
                    <td><?= h($user->remember_token) ?></td>
                    <td><?= h($user->created_at) ?></td>
                    <td><?= h($user->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
