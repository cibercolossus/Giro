<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\License $license
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit License'), ['action' => 'edit', $license->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete License'), ['action' => 'delete', $license->id], ['confirm' => __('Are you sure you want to delete # {0}?', $license->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="licenses view large-9 medium-8 columns content">
    <h3><?= h($license->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($license->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categories') ?></th>
            <td><?= h($license->categories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Front') ?></th>
            <td><?= h($license->front) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reverse') ?></th>
            <td><?= h($license->reverse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character') ?></th>
            <td><?= $license->has('character') ? $this->Html->link($license->character->id, ['controller' => 'Characters', 'action' => 'view', $license->character->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($license->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fines') ?></th>
            <td><?= $license->fines ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
