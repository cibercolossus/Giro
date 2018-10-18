<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-10 medium-10 columns content">
    <h3><?= h($answer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Control') ?></th>
            <td><?= $answer->has('control') ? $this->Html->link($answer->control->name, ['controller' => 'Controls', 'action' => 'view', $answer->control->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= h($answer->answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evidences') ?></h4>
        <?php if (!empty($answer->evidences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('File Dir') ?></th>
                <th scope="col"><?= __('Fila Name') ?></th>
                <th scope="col"><?= __('Answer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($answer->evidences as $evidences): ?>
            <tr>
                <td><?= h($evidences->id) ?></td>
                <td><?= h($evidences->description) ?></td>
                <td><?= h($evidences->file_dir) ?></td>
                <td><?= h($evidences->fila_name) ?></td>
                <td><?= h($evidences->answer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evidences', 'action' => 'view', $evidences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evidences', 'action' => 'edit', $evidences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evidences', 'action' => 'delete', $evidences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
