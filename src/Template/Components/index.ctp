<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Component[]|\Cake\Collection\CollectionInterface $components
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Sistemas'), ['controller' => 'Systems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Sistema'), ['controller' => 'Systems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="components index large-10 medium-10 columns content">
    <h3><?= __('Componentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('Sistema') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($components as $component): ?>
            <tr>
                <td><?= $this->Number->format($component->id) ?></td>
                <td><?= h($component->name) ?></td>
                
                <td><?= $component->has('system') ? $this->Html->link($component->system->name, ['controller' => 'Systems', 'action' => 'view', $component->system->slug]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $component->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $component->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $component->slug], ['confirm' => __('¿Esta seguro de borrar el componente: {0}?', $component->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primer')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, viendo {{current}} registros(s) de {{count}} en total')]) ?></p>
    </div>
</div>
