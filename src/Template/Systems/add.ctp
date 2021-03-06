<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System $system
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista  Sistemas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista  Componentes'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo  Componente'), ['controller' => 'Components', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="systems form large-10 medium-10 columns content">
    <?= $this->Form->create($system) ?>
    <fieldset>
        <legend><?= __('Agregar Sistema') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
