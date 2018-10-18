<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family[]|\Cake\Collection\CollectionInterface $families
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Close Relatives'), ['controller' => 'CloseRelatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Close Relative'), ['controller' => 'CloseRelatives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relatives'), ['controller' => 'Relatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relative'), ['controller' => 'Relatives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="families index large-9 medium-8 columns content">
    <h3><?= __('Families') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($families as $family): ?>
            <tr>
                <td><?= $this->Number->format($family->id) ?></td>
                <td><?= $family->has('home_visity') ? $this->Html->link($family->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $family->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $family->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $family->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?>
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
