<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs index large-9 medium-8 columns content">
    <h3><?= __('Jobs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retirement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('immediate_boos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= $this->Number->format($job->id) ?></td>
                <td><?= h($job->company_name) ?></td>
                <td><?= h($job->last_position) ?></td>
                <td><?= h($job->entry) ?></td>
                <td><?= h($job->retirement) ?></td>
                <td><?= h($job->reason) ?></td>
                <td><?= h($job->immediate_boos) ?></td>
                <td><?= h($job->phone) ?></td>
                <td><?= $job->has('home_visity') ? $this->Html->link($job->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $job->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?>
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
