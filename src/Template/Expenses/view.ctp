<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expense'), ['action' => 'edit', $expense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expense'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expenses view large-9 medium-8 columns content">
    <h3><?= h($expense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Economy') ?></th>
            <td><?= $expense->has('economy') ? $this->Html->link($expense->economy->id, ['controller' => 'Economies', 'action' => 'view', $expense->economy->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rent') ?></th>
            <td><?= $this->Number->format($expense->rent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Public Services') ?></th>
            <td><?= $this->Number->format($expense->public_services) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feeding') ?></th>
            <td><?= $this->Number->format($expense->feeding) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= $this->Number->format($expense->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport') ?></th>
            <td><?= $this->Number->format($expense->transport) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recreation') ?></th>
            <td><?= $this->Number->format($expense->recreation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit Cards') ?></th>
            <td><?= $this->Number->format($expense->credit_cards) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Plan') ?></th>
            <td><?= $this->Number->format($expense->phone_plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scheduled Savings') ?></th>
            <td><?= $this->Number->format($expense->scheduled_savings) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Support') ?></th>
            <td><?= $this->Number->format($expense->family_support) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credits') ?></th>
            <td><?= $this->Number->format($expense->credits) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= $this->Number->format($expense->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($expense->total) ?></td>
        </tr>
    </table>
</div>
