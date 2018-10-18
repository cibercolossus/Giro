<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notebook $notebook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notebook'), ['action' => 'edit', $notebook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notebook'), ['action' => 'delete', $notebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notebook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notebooks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notebook'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notebooks view large-9 medium-8 columns content">
    <h3><?= h($notebook->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($notebook->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td><?= h($notebook->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Military District') ?></th>
            <td><?= h($notebook->military_district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Front') ?></th>
            <td><?= h($notebook->front) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character') ?></th>
            <td><?= $notebook->has('character') ? $this->Html->link($notebook->character->id, ['controller' => 'Characters', 'action' => 'view', $notebook->character->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($notebook->id) ?></td>
        </tr>
    </table>
</div>
