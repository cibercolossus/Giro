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
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('¿Borrar Usuario: {0}?', $user->name.' '.$user->last_name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-10 medium-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->control('cc', ['label' => 'Cédula de Ciudadanía']);
            echo $this->Form->control('name', ['label' => 'Nombres']);
            echo $this->Form->control('last_name', ['label' => 'Apellidos']);
            echo $this->Form->control('position', ['label' => 'Cargo']);
            echo $this->Form->control('email', ['label' => 'Correo Electrónico']);
            echo $this->Form->control('phone', ['label' => 'Teléfono']);
            echo $this->Form->control('role', ['options' => ['Administrador'=>'Administrador','Auditor'=>'Auditor', 'Cliente' =>'Cliente', 'Operador' => 'Operador', 'Comercial' => 'Comercial', 'Visitador' => 'Visitador'], 'label' => 'Tipo de Usuario']); 
            echo $this->Form->control('client_id', ['options' => $clients, 'label' => 'Cliente']);
            echo $this->Form->control('active', ['label' => 'Activo']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
