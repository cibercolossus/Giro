<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense[]|\Cake\Collection\CollectionInterface $expenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expenses index large-9 medium-8 columns content">
    <h3><?= __('Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('public_services') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feeding') ?></th>
                <th scope="col"><?= $this->Paginator->sort('education') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transport') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recreation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit_cards') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scheduled_savings') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_support') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credits') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('economy_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
            <tr>
                <td><?= $this->Number->format($expense->id) ?></td>
                <td><?= $this->Number->format($expense->rent) ?></td>
                <td><?= $this->Number->format($expense->public_services) ?></td>
                <td><?= $this->Number->format($expense->feeding) ?></td>
                <td><?= $this->Number->format($expense->education) ?></td>
                <td><?= $this->Number->format($expense->transport) ?></td>
                <td><?= $this->Number->format($expense->recreation) ?></td>
                <td><?= $this->Number->format($expense->credit_cards) ?></td>
                <td><?= $this->Number->format($expense->phone_plan) ?></td>
                <td><?= $this->Number->format($expense->scheduled_savings) ?></td>
                <td><?= $this->Number->format($expense->family_support) ?></td>
                <td><?= $this->Number->format($expense->credits) ?></td>
                <td><?= $this->Number->format($expense->others) ?></td>
                <td><?= $this->Number->format($expense->total) ?></td>
                <td><?= $expense->has('economy') ? $this->Html->link($expense->economy->id, ['controller' => 'Economies', 'action' => 'view', $expense->economy->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
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
