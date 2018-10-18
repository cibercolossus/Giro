<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income $income
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Income'), ['action' => 'edit', $income->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Income'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Income'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="income view large-9 medium-8 columns content">
    <h3><?= h($income->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Monthly Income') ?></th>
            <td><?= h($income->monthly_income) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Economy') ?></th>
            <td><?= $income->has('economy') ? $this->Html->link($income->economy->id, ['controller' => 'Economies', 'action' => 'view', $income->economy->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($income->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($income->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($income->total) ?></td>
        </tr>
    </table>
</div>
