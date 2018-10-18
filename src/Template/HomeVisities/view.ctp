<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li><?= $this->Html->link(__('Editar Visita Domiciliaria'), ['action' => 'edit', $homeVisity->id]) ?> </li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Form->postLink(__('Borrar Visita Domiciliaria'), ['action' => 'delete', $homeVisity->id], ['confirm' => __('¿Borrar Visita Domiciliaria con código: # {0}?', $homeVisity->code)]) ?> </li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Visitas Domiciliaria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Visita Domiciliaria'), ['action' => 'add']) ?> </li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Clientes'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <?php endif ?>
    </ul>
</nav>
<div class="homeVisities view large-10 medium-10 columns content">
    <h3><?= h($homeVisity->name.' '.$homeVisity->last_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($homeVisity->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($homeVisity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($homeVisity->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cédula de Ciudadanía') ?></th>
            <td><?= h($homeVisity->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono Principal') ?></th>
            <td><?= h($homeVisity->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono Opcional') ?></th>
            <td><?= h($homeVisity->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($homeVisity->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $homeVisity->has('user') ? $this->Html->link($homeVisity->user->email, ['controller' => 'Users', 'action' => 'view', $homeVisity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
             <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
            <td><?= $homeVisity->has('client') ? $this->Html->link($homeVisity->client->name, ['controller' => 'Clients', 'action' => 'view', $homeVisity->client->id]) : '' ?></td>
            <?php else: ?>
             <td><?= h($homeVisity->client->name) ?></td>
             <?php endif ?>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Iniciada') ?></th>
            <td><?= h($homeVisity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificada') ?></th>
            <td><?= h($homeVisity->modified) ?></td>
        </tr>
    </table>

    <div class="row">
        <h4><?= __('Dirección') ?></h4>
        <?= $this->Text->autoParagraph(h($homeVisity->address)); ?>
    </div>
    
</div>
