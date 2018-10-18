<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notebook[]|\Cake\Collection\CollectionInterface $notebooks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Notebook'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notebooks index large-9 medium-8 columns content">
    <h3><?= __('Notebooks') ?></h3>
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
            <?php foreach ($notebooks as $notebook): ?>
            <tr>
                <td><?= $this->Number->format($notebook->id) ?></td>
                <td><?= h($notebook->number) ?></td>
                <td><?= h($notebook->class) ?></td>
                <td><?= h($notebook->military_district) ?></td>
                <td><?= h($notebook->front) ?></td>
                <td><?= $notebook->has('character') ? $this->Html->link($notebook->character->id, ['controller' => 'Characters', 'action' => 'view', $notebook->character->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $notebook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notebook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notebook->id)]) ?>
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
