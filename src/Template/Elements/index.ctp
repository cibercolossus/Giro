<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element[]|\Cake\Collection\CollectionInterface $elements
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['controller' => 'Components', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Controles'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Control'), ['controller' => 'Controls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elements index large-10 medium-10 columns content">
    <h3><?= __('Elementos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Componente') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elements as $element): ?>
            <tr>
                <td><?= $this->Number->format($element->id) ?></td>
                <td><?= h($element->name) ?></td>
                <td><?= $element->has('component') ? $this->Html->link($element->component->name, ['controller' => 'Components', 'action' => 'view', $element->component->slug]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $element->slug]) ?> &nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $element->slug]) ?> &nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $element->slug], ['confirm' => __('¿Esta seguro de borrar el elemento: {0}?', $element->name)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mosrando {{current}} registro(s) de {{count}}  total')]) ?></p>
    </div>
</div>
