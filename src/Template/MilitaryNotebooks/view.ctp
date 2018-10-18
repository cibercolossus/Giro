<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilitaryNotebook $militaryNotebook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Military Notebook'), ['action' => 'edit', $militaryNotebook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Military Notebook'), ['action' => 'delete', $militaryNotebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $militaryNotebook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Military Notebooks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Military Notebook'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="militaryNotebooks view large-9 medium-8 columns content">
    <h3><?= h($militaryNotebook->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($militaryNotebook->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td><?= h($militaryNotebook->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Military District') ?></th>
            <td><?= h($militaryNotebook->military_district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Front') ?></th>
            <td><?= h($militaryNotebook->front) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($militaryNotebook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character Id') ?></th>
            <td><?= $this->Number->format($militaryNotebook->character_id) ?></td>
        </tr>
    </table>
</div>
