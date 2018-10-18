<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcademicInformation[]|\Cake\Collection\CollectionInterface $academicInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Academic Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="academicInformation index large-9 medium-8 columns content">
    <h3><?= __('Academic Information') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($academicInformation as $academicInformation): ?>
            <tr>
                <td><?= $this->Number->format($academicInformation->id) ?></td>
                <td><?= $academicInformation->has('home_visity') ? $this->Html->link($academicInformation->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $academicInformation->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $academicInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academicInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academicInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academicInformation->id)]) ?>
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
