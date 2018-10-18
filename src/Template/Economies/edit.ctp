<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Economy $economy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $economy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $economy->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Economies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bank Accounts'), ['controller' => 'BankAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bank Account'), ['controller' => 'BankAccounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Income'), ['controller' => 'Income', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Income', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="economies form large-9 medium-8 columns content">
    <?= $this->Form->create($economy) ?>
    <fieldset>
        <legend><?= __('Edit Economy') ?></legend>
        <?php
            echo $this->Form->control('home_economics');
            echo $this->Form->control('current_credits');
            echo $this->Form->control('furniture');
            echo $this->Form->control('ummovables');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
