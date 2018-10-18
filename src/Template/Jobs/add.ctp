<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Add Job') ?></legend>
        <?php
            echo $this->Form->control('company_name');
            echo $this->Form->control('last_position');
            echo $this->Form->control('entry');
            echo $this->Form->control('retirement');
            echo $this->Form->control('reason');
            echo $this->Form->control('immediate_boos');
            echo $this->Form->control('phone');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
