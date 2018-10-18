<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Control[]|\Cake\Collection\CollectionInterface $controls
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Control'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls index large-10 medium-10 columns content">
    <h3><?= __('Controles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('Elemento') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controls as $control): ?>
            <tr>
                <td><?= $this->Number->format($control->id) ?></td>
                <td><?= h($control->name) ?></td>
                
                <td><?= $control->has('element') ? $this->Html->link($control->element->name, ['controller' => 'Elements', 'action' => 'view', $control->element->slug]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $control->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $control->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $control->slug], ['confirm' => __('¿Esta seguro de borrar el control: # {0}?', $control->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, viendo {{current}} registro(s)de {{count}} total')]) ?></p>
    </div>
</div>
