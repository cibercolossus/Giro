<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Editar Inspeccipón'), ['action' => 'edit', $inspection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Inspección'), ['action' => 'delete', $inspection->id], ['confirm' => __('¿Desea Borrar la inspección # {0}?', $inspection->id)]) ?> </li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Inspecciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Inspección'), ['action' => 'add']) ?> </li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Resultados'), ['controller' => 'Results', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Resultado'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
        <?php endif ?>
    </ul>
</nav>
<div class="inspections view large-10 medium-10 columns content">
    <h3><?= h($inspection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($inspection->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $inspection->has('client') ? $this->Html->link($inspection->client->name, ['controller' => 'Clients', 'action' => 'view', $inspection->client->id]) : '' ?></td>
        </tr>
      
        <tr>
            <th scope="row"><?= __('Iniciada') ?></th>
            <td><?= h($inspection->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificada') ?></th>
            <td><?= h($inspection->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Resultados') ?></h4>
        <?php if (!empty($inspection->results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Componente') ?></th>
                <th scope="col"><?= __('Si') ?></th>
                <th scope="col"><?= __('No') ?></th>
                <th scope="col"><?= __('N/A') ?></th>
                <th scope="col"><?= __('N° Preguntas') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php foreach ($inspection->results as $results): ?>
            <tr>
                <td><?= h($results->component->name) ?></td>
                <td><?= h($results->yes) ?></td>
                <td><?= h($results->no) ?></td>
                <td><?= h($results->na) ?></td>
                <td><?= h($results->qty_question) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Results', 'action' => 'view', $results->id]) ?>
                    <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Results', 'action' => 'edit', $results->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id)]) ?>
                    <?php endif ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
