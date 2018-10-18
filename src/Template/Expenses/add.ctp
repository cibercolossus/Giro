<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expenses form large-9 medium-8 columns content">
    <?= $this->Form->create($expense) ?>
    <fieldset>
        <legend><?= __('Add Expense') ?></legend>
        <?php
            echo $this->Form->control('rent');
            echo $this->Form->control('public_services');
            echo $this->Form->control('feeding');
            echo $this->Form->control('education');
            echo $this->Form->control('transport');
            echo $this->Form->control('recreation');
            echo $this->Form->control('credit_cards');
            echo $this->Form->control('phone_plan');
            echo $this->Form->control('scheduled_savings');
            echo $this->Form->control('family_support');
            echo $this->Form->control('credits');
            echo $this->Form->control('others');
            echo $this->Form->control('total');
            echo $this->Form->control('economy_id', ['options' => $economies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
