<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relative[]|\Cake\Collection\CollectionInterface $relatives
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Relative'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relatives index large-9 medium-8 columns content">
    <h3><?= __('Relatives') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatives as $relative): ?>
            <tr>
                <td><?= $this->Number->format($relative->id) ?></td>
                <td><?= h($relative->name) ?></td>
                <td><?= h($relative->last_name) ?></td>
                <td><?= h($relative->relationship) ?></td>
                <td><?= $this->Number->format($relative->age) ?></td>
                <td><?= h($relative->cc) ?></td>
                <td><?= h($relative->occupation) ?></td>
                <td><?= h($relative->phone) ?></td>
                <td><?= $relative->has('family') ? $this->Html->link($relative->family->id, ['controller' => 'Families', 'action' => 'view', $relative->family->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $relative->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relative->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relative->id)]) ?>
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
