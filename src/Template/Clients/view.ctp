<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Accions') ?></li>
        <li><?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $client->slug]) ?> </li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Form->postLink(__('Borrar Cliente'), ['action' => 'delete', $client->slug], ['confirm' => __('¿Esta seguro de borrar el cliente: {0}?', $client->name)]) ?> </li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add']) ?> </li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lisa Inspecciones'), ['controller' => 'Inspections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Inspección'), ['controller' => 'Inspections', 'action' => 'add']) ?> </li>
        <?php endif ?>
    </ul>
</nav>
<div class="clients view large-10 medium-10 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nit') ?></th>
            <td><?= h($client->nit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono') ?></th>
            <td><?= h($client->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Dirección') ?></h4>
        <?= $this->Text->autoParagraph(h($client->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Inspecciones') ?></h4>
        <?php if (!empty($client->inspections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php foreach ($client->inspections as $inspections): ?>
            <tr>
                <td><?= h($inspections->id) ?></td>
                <td><?= h($inspections->status) ?></td>  
                <td><?= h($inspections->modified) ?></td>
              
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Inspections', 'action' => 'view', $inspections->id]) ?>
                  
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
