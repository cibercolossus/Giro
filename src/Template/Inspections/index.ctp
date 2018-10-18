<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection[]|\Cake\Collection\CollectionInterface $inspections
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Inspección'), ['action' => 'add']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
    </ul>
</nav>
<div class="inspections index large-10 medium-10 columns content">
    <h3><?= __('Inspecciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha Inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha Finalización') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cliente') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inspections as $inspection): ?>
            <tr>
                <td><?= $this->Number->format($inspection->id) ?></td>
                <td><?= h($inspection->status) ?></td>
                <td><?= h($inspection->created) ?></td>
                <td><?= h($inspection->modified) ?></td>
                  <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
                <td><?= $inspection->has('client') ? $this->Html->link($inspection->client->name, ['controller' => 'Clients', 'action' => 'view', $inspection->client->id]) : '' ?></td>
                <?php else: ?>
                <td><?= h($inspection->client->name) ?></td>
                <?php endif ?>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $inspection->id]) ?>&nbsp;&nbsp;
                    <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $inspection->id]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $inspection->id], ['confirm' => __('¿Esta seguro de borrar la Inspección: {0}?', $inspection->id)]) ?>
                    <?php endif ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Atras')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suiguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}} total')]) ?></p>
    </div>
</div>
