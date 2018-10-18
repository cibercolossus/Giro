<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departaments'), ['controller' => 'Departaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departament'), ['controller' => 'Departaments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maps'), ['controller' => 'Maps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map'), ['controller' => 'Maps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sectors form large-9 medium-8 columns content">
    <?= $this->Form->create($sector) ?>
    <fieldset>
        <legend><?= __('Add Sector') ?></legend>
        <?php
            echo $this->Form->control('departament_id', ['options' => $departaments]);
            echo $this->Form->control('municipality_id', ['options' => $municipalities]);
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('address');
            echo $this->Form->control('stratum');
            echo $this->Form->control('type');
            echo $this->Form->control('recidence_time');
            echo $this->Form->control('commune');
            echo $this->Form->control('risk_level');
            echo $this->Form->control('geographic_location');
            echo $this->Form->control('description_home');
            echo $this->Form->control('zone');
            echo $this->Form->control('school');
            echo $this->Form->control('supermarket');
            echo $this->Form->control('pilice_estation');
            echo $this->Form->control('hospitals');
            echo $this->Form->control('parks');
            echo $this->Form->control('colleges');
            echo $this->Form->control('shops');
            echo $this->Form->control('cai');
            echo $this->Form->control('clinic');
            echo $this->Form->control('parkland');
            echo $this->Form->control('university');
            echo $this->Form->control('mall');
            echo $this->Form->control('center_christian');
            echo $this->Form->control('church');
            echo $this->Form->control('stadium');
            echo $this->Form->control('access_roads');
            echo $this->Form->control('transportation_service');
            echo $this->Form->control('relationship_neighbors');
            echo $this->Form->control('drug_dispensing');
            echo $this->Form->control('prostitution_zone');
            echo $this->Form->control('high_impact_area');
            echo $this->Form->control('presence_animals');
            echo $this->Form->control('sewage');
            echo $this->Form->control('dump');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
