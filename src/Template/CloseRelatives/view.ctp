<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CloseRelative $closeRelative
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Close Relative'), ['action' => 'edit', $closeRelative->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Close Relative'), ['action' => 'delete', $closeRelative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closeRelative->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Close Relatives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Close Relative'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="closeRelatives view large-9 medium-8 columns content">
    <h3><?= h($closeRelative->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($closeRelative->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($closeRelative->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship') ?></th>
            <td><?= h($closeRelative->relationship) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cc') ?></th>
            <td><?= h($closeRelative->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($closeRelative->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($closeRelative->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family') ?></th>
            <td><?= $closeRelative->has('family') ? $this->Html->link($closeRelative->family->id, ['controller' => 'Families', 'action' => 'view', $closeRelative->family->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($closeRelative->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($closeRelative->age) ?></td>
        </tr>
    </table>
</div>
