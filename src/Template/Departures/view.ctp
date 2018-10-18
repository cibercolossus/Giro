<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departure $departure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departure'), ['action' => 'edit', $departure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departure'), ['action' => 'delete', $departure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departures view large-9 medium-8 columns content">
    <h3><?= h($departure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($departure->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Stay') ?></th>
            <td><?= h($departure->time_stay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason') ?></th>
            <td><?= h($departure->reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character') ?></th>
            <td><?= $departure->has('character') ? $this->Html->link($departure->character->id, ['controller' => 'Characters', 'action' => 'view', $departure->character->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($departure->date) ?></td>
        </tr>
    </table>
</div>
