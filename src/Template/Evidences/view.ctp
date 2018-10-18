<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evidence $evidence
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidence'), ['action' => 'edit', $evidence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidence'), ['action' => 'delete', $evidence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidences view large-9 medium-8 columns content">
    <h3><?= h($evidence->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($evidence->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($evidence->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= $evidence->has('answer') ? $this->Html->link($evidence->answer->id, ['controller' => 'Answers', 'action' => 'view', $evidence->answer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidence->id) ?></td>
        </tr>
    </table>
</div>
