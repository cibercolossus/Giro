<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserVisity $userVisity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Visity'), ['action' => 'edit', $userVisity->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Visity'), ['action' => 'delete', $userVisity->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userVisity->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Visities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Visity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userVisities view large-9 medium-8 columns content">
    <h3><?= h($userVisity->created) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userVisity->has('user') ? $this->Html->link($userVisity->user->email, ['controller' => 'Users', 'action' => 'view', $userVisity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $userVisity->has('home_visity') ? $this->Html->link($userVisity->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $userVisity->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userVisity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userVisity->modified) ?></td>
        </tr>
    </table>
</div>
