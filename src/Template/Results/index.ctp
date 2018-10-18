<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result[]|\Cake\Collection\CollectionInterface $results
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Components'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Component'), ['controller' => 'Components', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inspections'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inspection'), ['controller' => 'Inspections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="results index large-9 medium-8 columns content">
    <h3><?= __('Results') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('na') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty_question') ?></th>
                <th scope="col"><?= $this->Paginator->sort('component_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inspection_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
            <tr>
                <td><?= $this->Number->format($result->id) ?></td>
                <td><?= $this->Number->format($result->yes) ?></td>
                <td><?= $this->Number->format($result->no) ?></td>
                <td><?= $this->Number->format($result->na) ?></td>
                <td><?= h($result->qty_question) ?></td>
                <td><?= $result->has('component') ? $this->Html->link($result->component->name, ['controller' => 'Components', 'action' => 'view', $result->component->id]) : '' ?></td>
                <td><?= $result->has('inspection') ? $this->Html->link($result->inspection->id, ['controller' => 'Inspections', 'action' => 'view', $result->inspection->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $result->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $result->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?>
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
