<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-10 columns content">
    <h3><?= __('Usuario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cédula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre Completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->cc) ?></td>
                <td><?= h($user->name.' '.$user->last_name) ?></td>
                <td><?= h($user->position) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= $user->has('client') ? $this->Html->link($user->client->name, ['controller' => 'Clients', 'action' => 'view', $user->client->slug]) : '' ?></td>
                <td><?= h($user->active ? __('Activo') : __('Inactivo')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>&nbsp;
                     <?php if ($user->role !== 'SuperAdministrador'): ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id], ['confirm' => __('¿Desea Borrar al usuario: {0}?', $user->name.' '.$user->last_name)]) ?>
                    <?php endif ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Mostrando {{current}} Registro(s) de {{count}} Total')]) ?></p>
    </div>
</div>
