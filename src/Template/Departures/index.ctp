<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departure[]|\Cake\Collection\CollectionInterface $departures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departures index large-9 medium-8 columns content">
    <h3><?= __('Departures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_stay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('character_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departures as $departure): ?>
            <tr>
                <td><?= $this->Number->format($departure->id) ?></td>
                <td><?= h($departure->place) ?></td>
                <td><?= h($departure->date) ?></td>
                <td><?= h($departure->time_stay) ?></td>
                <td><?= h($departure->reason) ?></td>
                <td><?= $departure->has('character') ? $this->Html->link($departure->character->id, ['controller' => 'Characters', 'action' => 'view', $departure->character->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departure->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
