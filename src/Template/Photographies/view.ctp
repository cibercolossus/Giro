<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photography $photography
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photography'), ['action' => 'edit', $photography->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photography'), ['action' => 'delete', $photography->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photography->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photographies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photography'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photographies view large-9 medium-8 columns content">
    <h3><?= h($photography->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nomeclature') ?></th>
            <td><?= h($photography->nomeclature) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facade') ?></th>
            <td><?= h($photography->facade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Candidate Family') ?></th>
            <td><?= h($photography->candidate_family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $photography->has('home_visity') ? $this->Html->link($photography->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $photography->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photography->id) ?></td>
        </tr>
    </table>
</div>
