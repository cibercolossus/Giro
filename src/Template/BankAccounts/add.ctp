<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BankAccount $bankAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bank Accounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bankAccounts form large-9 medium-8 columns content">
    <?= $this->Form->create($bankAccount) ?>
    <fieldset>
        <legend><?= __('Add Bank Account') ?></legend>
        <?php
            echo $this->Form->control('bank_name');
            echo $this->Form->control('account_type');
            echo $this->Form->control('economy_id', ['options' => $economies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
