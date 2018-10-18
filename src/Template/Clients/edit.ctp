<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Actions') ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('¿Esta seguro de borrar el cliente: {0}?', $client->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Inspecciones'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Inspección'), ['controller' => 'Inspections', 'action' => 'add']) ?></li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clients form large-10 medium-10 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Editar Cliente') ?></legend>
        <?php
            echo $this->Form->control('nit', ['label' => 'NIT']);
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('phone', ['label' => 'Teléfono']);
            echo $this->Form->control('address', ['label' => 'Dirección']);
            echo $this->Form->control('email', ['label' => 'Correo Electrónico']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
