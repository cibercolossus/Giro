<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Character[]|\Cake\Collection\CollectionInterface $characters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Character'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departures'), ['controller' => 'Departures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departure'), ['controller' => 'Departures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notebooks'), ['controller' => 'Notebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notebook'), ['controller' => 'Notebooks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="characters index large-9 medium-8 columns content">
    <h3><?= __('Characters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expedition_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expedition_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blood_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
                <th scope="col"><?= $this->Paginator->sort('particular_signs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nickname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('civil_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($characters as $character): ?>
            <tr>
                <td><?= $this->Number->format($character->id) ?></td>
                <td><?= h($character->birth_place) ?></td>
                <td><?= $this->Number->format($character->age) ?></td>
                <td><?= h($character->birth_date) ?></td>
                <td><?= h($character->expedition_place) ?></td>
                <td><?= h($character->expedition_date) ?></td>
                <td><?= h($character->blood_type) ?></td>
                <td><?= $this->Number->format($character->height) ?></td>
                <td><?= h($character->particular_signs) ?></td>
                <td><?= h($character->nickname) ?></td>
                <td><?= h($character->civil_status) ?></td>
                <td><?= $this->Number->format($character->time) ?></td>
                <td><?= h($character->email) ?></td>
                <td><?= h($character->photo) ?></td>
                <td><?= $character->has('home_visity') ? $this->Html->link($character->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $character->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $character->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $character->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $character->id], ['confirm' => __('Are you sure you want to delete # {0}?', $character->id)]) ?>
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
