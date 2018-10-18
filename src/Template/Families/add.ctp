<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Close Relatives'), ['controller' => 'CloseRelatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Close Relative'), ['controller' => 'CloseRelatives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relatives'), ['controller' => 'Relatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relative'), ['controller' => 'Relatives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="families form large-9 medium-8 columns content">
    <?= $this->Form->create($family) ?>
    <fieldset>
        <legend><?= __('Add Family') ?></legend>
        <?php
            echo $this->Form->control('family_information_analysis');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
