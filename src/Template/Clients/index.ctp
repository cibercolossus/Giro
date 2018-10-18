<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Inspecciones'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Inspeccion'), ['controller' => 'Inspections', 'action' => 'add']) ?></li>
         <?php endif ?>
    </ul>
</nav>
<div class="clients index large-10 medium-10 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->nit) ?></td>
                <td><?= h($client->name) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $client->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $client->slug]) ?>&nbsp;&nbsp;
                    <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $client->slug], ['confirm' => __('¿Esta seguro de borrar el cliente: {0}?', $client->name)]) ?>
                    <?php endif ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Atras')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, viendo {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>
