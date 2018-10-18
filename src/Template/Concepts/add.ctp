<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concept $concept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Concepts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="concepts form large-9 medium-8 columns content">
    <?= $this->Form->create($concept) ?>
    <fieldset>
        <legend><?= __('Add Concept') ?></legend>
        <?php
            echo $this->Form->control('neighbornhood');
            echo $this->Form->control('friends');
            echo $this->Form->control('family');
            echo $this->Form->control('characterization');
            echo $this->Form->control('visit');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
