<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity[]|\Cake\Collection\CollectionInterface $homeVisities
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <?php if ($current_user['role'] !== 'Visitador' ): ?>
        <li><?= $this->Html->link(__('Nueva Visita Domiciliaria'), ['action' => 'add']) ?></li>
        <?php endif ?>

        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuario'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
       
    </ul>
</nav>
<div class="homeVisities index large-10 medium-10 columns content">
    <h3><?= __('Visitas Domiciliarias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre Completo') ?></th>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'  or $current_user['role'] === 'Visitador'): ?>
                <th scope="col"><?= $this->Paginator->sort('Teléfono Principal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Teléfono Opcional') ?></th>
                <?php endif ?>
              
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
                <th scope="col"><?= $this->Paginator->sort('Iniciada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cliente') ?></th>
                <?php endif ?>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeVisities as $homeVisity): ?>
            <tr>
               
                <td><?= h($homeVisity->code) ?></td>
                <td><?= h($homeVisity->name.' '.$homeVisity->last_name) ?></td>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'  or $current_user['role'] === 'Visitador'): ?>
                <td><?= h($homeVisity->phone) ?></td>
                <td><?= h($homeVisity->phone2) ?></td>
                <?php endif ?>
                <td><?= h($homeVisity->status) ?></td>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
                <td><?= h($homeVisity->created) ?></td>
                <td><?= $homeVisity->has('user') ? $this->Html->link($homeVisity->user->email, ['controller' => 'Users', 'action' => 'view', $homeVisity->user->id]) : '' ?></td>
                <td><?= $homeVisity->has('client') ? $this->Html->link($homeVisity->client->name, ['controller' => 'Clients', 'action' => 'view', $homeVisity->client->id]) : '' ?></td>
                <?php endif ?>

                <td class="actions">
                    <?php if ($current_user['role'] === 'Visitador' && $homeVisity->status !=='Terminada'): ?>  
                    <?= $this->Html->link(__('Iniciar Visita'), ['action' => 'startvisit', $homeVisity->id]) ?>&nbsp;
                    <?php endif ?>
                    <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Cliente'): ?>  
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $homeVisity->id]) ?>&nbsp;
                    <?php endif ?>
                    <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Operador'): ?>
                    <?= $this->Html->link(__('Gestionar'), ['action' => 'manage', $homeVisity->id]) ?>&nbsp;
                    <?php endif ?>
                     <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Cliente'): ?>  
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $homeVisity->id]) ?>&nbsp;
                    <?php endif ?>
                     <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $homeVisity->id], ['confirm' => __('¿Borrar Visita Domiciliaria con Codigo: {0}?', $homeVisity->code)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Mostrando {{current}} registro(s) de {{count}} Total')]) ?></p>
    </div>
</div>
