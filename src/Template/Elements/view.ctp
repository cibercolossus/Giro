<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element $element
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Elemento'), ['action' => 'edit', $element->slug]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Elemento'), ['action' => 'delete', $element->slug], ['confirm' => __('¿Esta seguro de borrar el elemento: {0}?', $element->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['controller' => 'Components', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['controller' => 'Components', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Controles'), ['controller' => 'Controls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Control'), ['controller' => 'Controls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elements view large-10 medium-10 columns content">
    <h3><?= h($element->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($element->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Componente') ?></th>
            <td><?= $element->has('component') ? $this->Html->link($element->component->name, ['controller' => 'Components', 'action' => 'view', $element->component->slug]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($element->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($element->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($element->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Agregar Control') ?></h4>
        <?= $this->Form->create(null,['url' => ['controller' => 'Controls', 'action' => 'add']]); ?>
   
        <?php
            echo $this->Form->control('name', ['required'=> 'true', 'label' => 'Nombre']);
            echo $this->Form->control('element_id', ['type' => 'hidden', 'value' => $element->id]);
            echo $this->Form->control('redirect', ['type' => 'hidden', 'value' => '/elements/view/'.$element->slug]);
        ?>
    
        <?= $this->Form->button(__('Agregar')) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="related">
        <h4><?= __('Controles') ?></h4>
        <?php if (!empty($element->controls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php $cont=1; ?>
            <?php foreach ($element->controls as $controls): ?>
            <tr>
                <td><?= h($cont) ?></td>
                <td><?= h($controls->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Controls', 'action' => 'view', $controls->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Controls', 'action' => 'edit', $controls->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Controls', 'action' => 'delete', $controls->slug.' components '.$element->slug], ['confirm' => __('¿Esta seguro de borrar el control: {0}?', $controls->name)]) ?>
                </td>
            </tr>
            <?php $cont++; ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
