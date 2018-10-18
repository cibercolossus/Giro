<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipality[]|\Cake\Collection\CollectionInterface $municipalities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Municipality'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departaments'), ['controller' => 'Departaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departament'), ['controller' => 'Departaments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalities index large-9 medium-8 columns content">
    <h3><?= __('Municipalities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departament_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipalities as $municipality): ?>
            <tr>
                <td><?= $this->Number->format($municipality->id) ?></td>
                <td><?= h($municipality->municipality) ?></td>
                <td><?= $municipality->has('departament') ? $this->Html->link($municipality->departament->id, ['controller' => 'Departaments', 'action' => 'view', $municipality->departament->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $municipality->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipality->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipality->id)]) ?>
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
