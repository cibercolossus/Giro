<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notebook $notebook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Notebooks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notebooks form large-9 medium-8 columns content">
    <?= $this->Form->create($notebook) ?>
    <fieldset>
        <legend><?= __('Add Notebook') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('class');
            echo $this->Form->control('military_district');
            echo $this->Form->control('front');
            echo $this->Form->control('character_id', ['options' => $characters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
