<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilitaryNotebook[]|\Cake\Collection\CollectionInterface $militaryNotebooks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Military Notebook'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="militaryNotebooks index large-9 medium-8 columns content">
    <h3><?= __('Military Notebooks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class') ?></th>
                <th scope="col"><?= $this->Paginator->sort('military_district') ?></th>
                <th scope="col"><?= $this->Paginator->sort('front') ?></th>
                <th scope="col"><?= $this->Paginator->sort('character_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($militaryNotebooks as $militaryNotebook): ?>
            <tr>
                <td><?= $this->Number->format($militaryNotebook->id) ?></td>
                <td><?= h($militaryNotebook->number) ?></td>
                <td><?= h($militaryNotebook->class) ?></td>
                <td><?= h($militaryNotebook->military_district) ?></td>
                <td><?= h($militaryNotebook->front) ?></td>
                <td><?= $this->Number->format($militaryNotebook->character_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $militaryNotebook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $militaryNotebook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $militaryNotebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $militaryNotebook->id)]) ?>
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
