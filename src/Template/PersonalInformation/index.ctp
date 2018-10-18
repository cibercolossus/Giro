<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonalInformation[]|\Cake\Collection\CollectionInterface $personalInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Personal Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Country Departures'), ['controller' => 'CountryDepartures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country Departure'), ['controller' => 'CountryDepartures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Military Notebooks'), ['controller' => 'MilitaryNotebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Military Notebook'), ['controller' => 'MilitaryNotebooks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personalInformation index large-9 medium-8 columns content">
    <h3><?= __('Personal Information') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expedition_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expedition_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blood_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
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
            <?php foreach ($personalInformation as $personalInformation): ?>
            <tr>
                <td><?= $this->Number->format($personalInformation->id) ?></td>
                <td><?= h($personalInformation->birth_place) ?></td>
                <td><?= h($personalInformation->birth_date) ?></td>
                <td><?= $this->Number->format($personalInformation->age) ?></td>
                <td><?= h($personalInformation->expedition_place) ?></td>
                <td><?= h($personalInformation->expedition_date) ?></td>
                <td><?= h($personalInformation->blood_type) ?></td>
                <td><?= $this->Number->format($personalInformation->height) ?></td>
                <td><?= h($personalInformation->nickname) ?></td>
                <td><?= h($personalInformation->civil_status) ?></td>
                <td><?= $this->Number->format($personalInformation->time) ?></td>
                <td><?= h($personalInformation->email) ?></td>
                <td><?= h($personalInformation->photo) ?></td>
                <td><?= $personalInformation->has('home_visity') ? $this->Html->link($personalInformation->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $personalInformation->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $personalInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personalInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personalInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalInformation->id)]) ?>
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
