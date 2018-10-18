<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departure $departure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Departures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departures form large-9 medium-8 columns content">
    <?= $this->Form->create($departure) ?>
    <fieldset>
        <legend><?= __('Add Departure') ?></legend>
        <?php
            echo $this->Form->control('place');
            echo $this->Form->control('date');
            echo $this->Form->control('time_stay');
            echo $this->Form->control('reason');
            echo $this->Form->control('character_id', ['options' => $characters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
