<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concept $concept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Concept'), ['action' => 'edit', $concept->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Concept'), ['action' => 'delete', $concept->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concept->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Concepts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Concept'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="concepts view large-9 medium-8 columns content">
    <h3><?= h($concept->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $concept->has('home_visity') ? $this->Html->link($concept->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $concept->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($concept->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Neighbornhood') ?></h4>
        <?= $this->Text->autoParagraph(h($concept->neighbornhood)); ?>
    </div>
    <div class="row">
        <h4><?= __('Friends') ?></h4>
        <?= $this->Text->autoParagraph(h($concept->friends)); ?>
    </div>
    <div class="row">
        <h4><?= __('Family') ?></h4>
        <?= $this->Text->autoParagraph(h($concept->family)); ?>
    </div>
    <div class="row">
        <h4><?= __('Characterization') ?></h4>
        <?= $this->Text->autoParagraph(h($concept->characterization)); ?>
    </div>
    <div class="row">
        <h4><?= __('Visit') ?></h4>
        <?= $this->Text->autoParagraph(h($concept->visit)); ?>
    </div>
</div>
