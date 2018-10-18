<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">

    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-10 medium-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->control('cc', ['label' => 'Cédula de Ciudadania']);
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('last_name', ['label' => 'Apellido']);
            echo $this->Form->control('position', ['label' => 'Cargo']);
            echo $this->Form->control('email', ['label' => 'Correo Electrónico']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->control('phone', ['label' => 'Telefono']);
            echo $this->Form->control('client_id', ['options' => $clients, 'label' => 'Empresa']);
            echo $this->Form->control('role', ['options' => ['Administrador'=>'Administrador','Auditor'=>'Auditor', 'Cliente' =>'Cliente', 'Operador' => 'Operador', 'Comercial' => 'Comercial', 'Visitador' => 'Visitador'], 'label' => 'Tipo de Usuario']); 
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
