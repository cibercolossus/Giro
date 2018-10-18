<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income[]|\Cake\Collection\CollectionInterface $income
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Income'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Economies'), ['controller' => 'Economies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Economy'), ['controller' => 'Economies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="income index large-9 medium-8 columns content">
    <h3><?= __('Income') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_income') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('economy_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($income as $income): ?>
            <tr>
                <td><?= $this->Number->format($income->id) ?></td>
                <td><?= h($income->monthly_income) ?></td>
                <td><?= $this->Number->format($income->value) ?></td>
                <td><?= $this->Number->format($income->total) ?></td>
                <td><?= $income->has('economy') ? $this->Html->link($income->economy->id, ['controller' => 'Economies', 'action' => 'view', $income->economy->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $income->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $income->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?>
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
