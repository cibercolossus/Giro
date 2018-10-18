<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relative $relative
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Relative'), ['action' => 'edit', $relative->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Relative'), ['action' => 'delete', $relative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relative->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Relatives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relative'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="relatives view large-9 medium-8 columns content">
    <h3><?= h($relative->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($relative->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($relative->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship') ?></th>
            <td><?= h($relative->relationship) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cc') ?></th>
            <td><?= h($relative->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($relative->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($relative->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family') ?></th>
            <td><?= $relative->has('family') ? $this->Html->link($relative->family->id, ['controller' => 'Families', 'action' => 'view', $relative->family->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($relative->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($relative->age) ?></td>
        </tr>
    </table>
</div>
