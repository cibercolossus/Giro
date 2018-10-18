<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
 <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar '), ['action' => 'delete', $user->id], ['confirm' => __('¿Desea borrar al usuario: {0}?', $user->name. ' '.$user->last_name)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
<?php endif ?>
</nav>
<div class="users view large-10 medium-10 columns content">
    <h3><?= h($user->name.' '.$user->last_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cédula de Ciudadania') ?></th>
            <td><?= h($user->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Completo') ?></th>
            <td><?= h($user->name.' '.$user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($user->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo Electrónico') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <tr>
            <th scope="row"><?= __('Tipo de Usuario') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <?php endif ?>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <?php if (isset($user['role']) and ($user['role'] === 'Root' or $user['role'] === 'Admin')){ ?>
            <td><?= $user->has('client') ? $this->Html->link($user->client->name, ['controller' => 'Clients', 'action' => 'view', $user->client->id]) : '' ?></td>
            <?php } else { ?>
            <td><?= h($user->client->name) ?></td>
            <?php } ?>
        </tr>
        <?php if (isset($user['role']) and ($user['role'] === 'Root' or $user['role'] === 'Admin')): ?>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <?php endif ?>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $user->active ? __('Activo') : __('Inactivo'); ?></td>
        </tr>
    </table>
</div>
