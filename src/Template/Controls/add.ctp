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
        <li><?= $this->Html->link(__('Lista Controles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls form large-10 medium-10 columns content">
    <?= $this->Form->create($control) ?>
    <fieldset>
        <legend><?= __('Agregar Control') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
    
            echo $this->Form->control('element_id', ['options' => $elements, 'label' => 'Elemento']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
