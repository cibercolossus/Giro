<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Passport $passport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Passport'), ['action' => 'edit', $passport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Passport'), ['action' => 'delete', $passport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $passport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Passports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passport'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="passports view large-9 medium-8 columns content">
    <h3><?= h($passport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($passport->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Front') ?></th>
            <td><?= h($passport->front) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character') ?></th>
            <td><?= $passport->has('character') ? $this->Html->link($passport->character->id, ['controller' => 'Characters', 'action' => 'view', $passport->character->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($passport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration Date') ?></th>
            <td><?= h($passport->expiration_date) ?></td>
        </tr>
    </table>
</div>
