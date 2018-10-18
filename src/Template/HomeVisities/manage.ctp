<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador'): ?>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $homeVisity->id],
                ['confirm' => __('¿Borrar Visita Domiciliaria con el código: {0}?', $homeVisity->code)]
            )
        ?></li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Visitas'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Visitas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
    </ul>
</nav>
<div class="homeVisities form large-10 medium-10 columns content">
    
    <fieldset>
        <legend><?= __('Getionar Visita Domiciliaria') ?></legend>

         <h3><?= h($homeVisity->name.' '.$homeVisity->last_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($homeVisity->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres y Apellidos') ?></th>
            <td><?= h($homeVisity->name.' '.$homeVisity->last_name) ?></td>
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
    
    <?php if ($homeVisity->status === 'Iniciada'): ?>
    <div class="row">
        <h4><?= __('Asignar Visitador') ?></h4>
        <?= $this->Form->create($homeVisity) ?>
        <?= $this->Form->control('user_id', ['options' => $visitors, 'label' => 'Visitadores']) ?>
        <?= $this->Form->hidden('home_visity_id', ['value' => $homeVisity->id]) ?>
        <?= $this->Form->button(__('Asignar')) ?>
        <?= $this->Form->end() ?>
    </div>
    <?php endif ?>

    <?php if ($homeVisity->status === 'Finalizada'): ?>
    <div class="row">
        <h4><?= __('Publicar Visita') ?></h4>
        <?= $this->Form->create($homeVisity,['action' => 'finish']) ?>
        <?= $this->Form->button(__('Publicar')) ?>
        <?= $this->Form->end() ?>
    </div>
    <?php endif ?>

    </fieldset>


    <?php if ($homeVisity->status === 'Terminada'): ?>
    <div class="related">
        <h4><?= __('Detalles de Visita') ?></h4>
        
        <?= $this->Html->link(__('Ver'), [ 'action' => 'viewvisit', $homeVisity->id, '_ext' => 'pdf'], ['class' => 'button', 'target' => '_blank']) ?>&nbsp;&nbsp;
        <?= $this->Html->link(__('Editar'), [ 'action' => 'editvisit', $homeVisity->id], ['class' => 'button']) ?>&nbsp;&nbsp;
        <?= $this->Html->link(__('Publicar'), ['action' => 'post', $homeVisity->id], ['class' => 'button']) ?>&nbsp;&nbsp;
    </div>
    <?php endif ?>
        
    
   
</div>
