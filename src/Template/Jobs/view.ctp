<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($job->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Position') ?></th>
            <td><?= h($job->last_position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason') ?></th>
            <td><?= h($job->reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Immediate Boos') ?></th>
            <td><?= h($job->immediate_boos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($job->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $job->has('home_visity') ? $this->Html->link($job->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $job->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entry') ?></th>
            <td><?= h($job->entry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retirement') ?></th>
            <td><?= h($job->retirement) ?></td>
        </tr>
    </table>
</div>
