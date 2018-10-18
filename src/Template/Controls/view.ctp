<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Control $control
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Control'), ['action' => 'edit', $control->slug]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Control'), ['action' => 'delete', $control->slug], ['confirm' => __('¿Esta seguro de borrar el control: {0}?', $control->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Controles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Control'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['controller' => 'Elements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controls view large-10 medium-10 columns content">
    <h3><?= h($control->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($control->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Elemento') ?></th>
            <td><?= $control->has('element') ? $this->Html->link($control->element->name, ['controller' => 'Elements', 'action' => 'view', $control->element->slug]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($control->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($control->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($control->modified) ?></td>
        </tr>
    </table>
</div>
