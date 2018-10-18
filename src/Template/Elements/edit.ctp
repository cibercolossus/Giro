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
        <li><?= $this->Form->postLink(
                __('Borrar Elemento'),
                ['action' => 'delete', $element->slug],
                ['confirm' => __('¿Esta seguro de borrar el elemento: {0}?', $element->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['controller' => 'Components', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Controles'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Control'), ['controller' => 'Controls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elements form large-10 medium-10 columns content">
    <?= $this->Form->create($element) ?>
    <fieldset>
        <legend><?= __('Editar Elemento') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('component_id', ['options' => $components, 'label' => 'Componente']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
