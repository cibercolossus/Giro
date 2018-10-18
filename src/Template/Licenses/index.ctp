<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\License[]|\Cake\Collection\CollectionInterface $licenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New License'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licenses index large-9 medium-8 columns content">
    <h3><?= __('Licenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('front') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reverse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('character_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($licenses as $license): ?>
            <tr>
                <td><?= $this->Number->format($license->id) ?></td>
                <td><?= h($license->number) ?></td>
                <td><?= h($license->categories) ?></td>
                <td><?= h($license->fines) ?></td>
                <td><?= h($license->front) ?></td>
                <td><?= h($license->reverse) ?></td>
                <td><?= $license->has('character') ? $this->Html->link($license->character->id, ['controller' => 'Characters', 'action' => 'view', $license->character->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $license->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $license->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $license->id], ['confirm' => __('Are you sure you want to delete # {0}?', $license->id)]) ?>
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
