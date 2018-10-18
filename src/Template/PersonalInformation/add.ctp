<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonalInformation $personalInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Personal Information'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Country Departures'), ['controller' => 'CountryDepartures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country Departure'), ['controller' => 'CountryDepartures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Military Notebooks'), ['controller' => 'MilitaryNotebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Military Notebook'), ['controller' => 'MilitaryNotebooks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personalInformation form large-9 medium-8 columns content">
    <?= $this->Form->create($personalInformation) ?>
    <fieldset>
        <legend><?= __('Add Personal Information') ?></legend>
        <?php
            echo $this->Form->control('birth_place');
            echo $this->Form->control('birth_date');
            echo $this->Form->control('age');
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
