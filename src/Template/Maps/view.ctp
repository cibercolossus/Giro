<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map $map
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map'), ['action' => 'edit', $map->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map'), ['action' => 'delete', $map->id], ['confirm' => __('Are you sure you want to delete # {0}?', $map->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maps view large-9 medium-8 columns content">
    <h3><?= h($map->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Map') ?></th>
            <td><?= h($map->map) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commune') ?></th>
            <td><?= h($map->commune) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sector') ?></th>
            <td><?= $map->has('sector') ? $this->Html->link($map->sector->id, ['controller' => 'Sectors', 'action' => 'view', $map->sector->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($map->id) ?></td>
        </tr>
    </table>
</div>
