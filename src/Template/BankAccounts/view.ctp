<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BankAccount $bankAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bank Account'), ['action' => 'edit', $bankAccount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bank Account'), ['action' => 'delete', $bankAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankAccount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bank Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bankAccounts view large-9 medium-8 columns content">
    <h3><?= h($bankAccount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td><?= h($bankAccount->bank_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Type') ?></th>
            <td><?= h($bankAccount->account_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Economy') ?></th>
            <td><?= $bankAccount->has('economy') ? $this->Html->link($bankAccount->economy->id, ['controller' => 'Economies', 'action' => 'view', $bankAccount->economy->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bankAccount->id) ?></td>
        </tr>
    </table>
</div>
