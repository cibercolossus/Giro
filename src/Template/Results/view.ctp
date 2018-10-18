<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result $result
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Components'), ['controller' => 'Components', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Component'), ['controller' => 'Components', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inspections'), ['controller' => 'Inspections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inspection'), ['controller' => 'Inspections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="results view large-9 medium-8 columns content">
    <h3><?= h($result->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Qty Question') ?></th>
            <td><?= h($result->qty_question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Component') ?></th>
            <td><?= $result->has('component') ? $this->Html->link($result->component->name, ['controller' => 'Components', 'action' => 'view', $result->component->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inspection') ?></th>
            <td><?= $result->has('inspection') ? $this->Html->link($result->inspection->id, ['controller' => 'Inspections', 'action' => 'view', $result->inspection->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($result->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yes') ?></th>
            <td><?= $this->Number->format($result->yes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No') ?></th>
            <td><?= $this->Number->format($result->no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Na') ?></th>
            <td><?= $this->Number->format($result->na) ?></td>
        </tr>
    </table>
</div>
