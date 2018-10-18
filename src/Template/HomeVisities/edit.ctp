<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $homeVisity->id],
                ['confirm' => __('¿Borrar Visita Domiciliaria con el código: {0}?', $homeVisity->code)]
            )
        ?></li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Visitas'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Visitas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
    </ul>
</nav>
<div class="homeVisities form large-10 medium-10 columns content">
    <?= $this->Form->create($homeVisity) ?>
    <fieldset>
        <legend><?= __('Editar Visita Domiciliaria') ?></legend>
        <?php

            echo $this->Form->control('name', ['label' => 'Nombres']);
            echo $this->Form->control('last_name', ['label' => 'Apellidos']);
            echo $this->Form->control('cc', ['label' => 'Cédula de Ciudadanía']);
            echo $this->Form->control('phone', ['label' => 'Teléfono Principal']);
            echo $this->Form->control('phone2', ['label' => 'Teléfono Opcional']);
            echo $this->Form->control('address', ['label' => 'Dirección']);
            if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): 
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            endif
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
