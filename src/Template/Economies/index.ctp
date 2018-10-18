<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Economy[]|\Cake\Collection\CollectionInterface $economies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Economy'), ['action' => 'add']) ?></li>
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
<div class="economies index large-9 medium-8 columns content">
    <h3><?= __('Economies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($economies as $economy): ?>
            <tr>
                <td><?= $this->Number->format($economy->id) ?></td>
                <td><?= $economy->has('home_visity') ? $this->Html->link($economy->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $economy->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $economy->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $economy->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $economy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $economy->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
