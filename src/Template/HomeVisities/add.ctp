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
        <li><?= $this->Html->link(__('Lista Visitas Domiciliarias'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
        
    </ul>
</nav>
<div class="homeVisities form large-10 medium-10 columns content">
    <?= $this->Form->create($homeVisity) ?>
    <fieldset>
        <legend><?= __('Nueva Visita Domiciliaria') ?></legend>
        <?php
           
            echo $this->Form->control('name', ['label' => 'Nombres']);
            echo $this->Form->control('last_name', ['label' => 'Apellidos']);
            echo $this->Form->control('cc', ['label' => 'Cédula de Ciudadanía']);
            echo $this->Form->control('phone', ['label' => 'Teléfono Principal']);
            echo $this->Form->control('phone2', ['label' => 'Teléfono Secundario']);
            echo $this->Form->control('address', ['label' => 'Dirección']);
            if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'):
            echo $this->Form->control('user_id', ['options' => $users, 'label' => 'Usuario']);
            echo $this->Form->control('client_id', ['options' => $clients, 'label' => 'Empresa']);
            endif
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
