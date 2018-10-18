<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Character $character
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departures'), ['controller' => 'Departures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departure'), ['controller' => 'Departures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notebooks'), ['controller' => 'Notebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notebook'), ['controller' => 'Notebooks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="characters form large-9 medium-8 columns content">
    <?= $this->Form->create($character) ?>
    <fieldset>
        <legend><?= __('Add Character') ?></legend>
        <?php
            echo $this->Form->control('birth_place');
            echo $this->Form->control('age');
            echo $this->Form->control('birth_date');
            echo $this->Form->control('expedition_place');
            echo $this->Form->control('expedition_date');
            echo $this->Form->control('blood_type');
            echo $this->Form->control('height');
            echo $this->Form->control('particular_signs');
            echo $this->Form->control('nickname');
            echo $this->Form->control('civil_status');
            echo $this->Form->control('time');
            echo $this->Form->control('email');
            echo $this->Form->control('observations_personal_information');
            echo $this->Form->control('photo');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
