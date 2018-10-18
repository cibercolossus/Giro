<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipality $municipality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departaments'), ['controller' => 'Departaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departament'), ['controller' => 'Departaments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalities form large-9 medium-8 columns content">
    <?= $this->Form->create($municipality) ?>
    <fieldset>
        <legend><?= __('Add Municipality') ?></legend>
        <?php
            echo $this->Form->control('municipality');
            echo $this->Form->control('departament_id', ['options' => $departaments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
