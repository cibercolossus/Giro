<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departament $departament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Departaments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departaments form large-9 medium-8 columns content">
    <?= $this->Form->create($departament) ?>
    <fieldset>
        <legend><?= __('Add Departament') ?></legend>
        <?php
            echo $this->Form->control('departament');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
