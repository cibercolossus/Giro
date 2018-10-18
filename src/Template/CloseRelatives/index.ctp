<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CloseRelative[]|\Cake\Collection\CollectionInterface $closeRelatives
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Close Relative'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="closeRelatives index large-9 medium-8 columns content">
    <h3><?= __('Close Relatives') ?></h3>
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
            <?php foreach ($closeRelatives as $closeRelative): ?>
            <tr>
                <td><?= $this->Number->format($closeRelative->id) ?></td>
                <td><?= h($closeRelative->name) ?></td>
                <td><?= h($closeRelative->last_name) ?></td>
                <td><?= h($closeRelative->relationship) ?></td>
                <td><?= $this->Number->format($closeRelative->age) ?></td>
                <td><?= h($closeRelative->cc) ?></td>
                <td><?= h($closeRelative->occupation) ?></td>
                <td><?= h($closeRelative->phone) ?></td>
                <td><?= $closeRelative->has('family') ? $this->Html->link($closeRelative->family->id, ['controller' => 'Families', 'action' => 'view', $closeRelative->family->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $closeRelative->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $closeRelative->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $closeRelative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closeRelative->id)]) ?>
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
