<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserVisity[]|\Cake\Collection\CollectionInterface $userVisities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Visity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userVisities index large-9 medium-8 columns content">
    <h3><?= __('User Visities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userVisities as $userVisity): ?>
            <tr>
                <td><?= h($userVisity->created) ?></td>
                <td><?= h($userVisity->modified) ?></td>
                <td><?= $userVisity->has('user') ? $this->Html->link($userVisity->user->email, ['controller' => 'Users', 'action' => 'view', $userVisity->user->id]) : '' ?></td>
                <td><?= $userVisity->has('home_visity') ? $this->Html->link($userVisity->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $userVisity->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userVisity->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userVisity->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userVisity->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userVisity->user_id)]) ?>
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
