<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Character $character
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Character'), ['action' => 'edit', $character->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Character'), ['action' => 'delete', $character->id], ['confirm' => __('Are you sure you want to delete # {0}?', $character->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Characters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Character'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departures'), ['controller' => 'Departures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departure'), ['controller' => 'Departures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notebooks'), ['controller' => 'Notebooks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notebook'), ['controller' => 'Notebooks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="characters view large-9 medium-8 columns content">
    <h3><?= h($character->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Birth Place') ?></th>
            <td><?= h($character->birth_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expedition Place') ?></th>
            <td><?= h($character->expedition_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blood Type') ?></th>
            <td><?= h($character->blood_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Particular Signs') ?></th>
            <td><?= h($character->particular_signs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nickname') ?></th>
            <td><?= h($character->nickname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civil Status') ?></th>
            <td><?= h($character->civil_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($character->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($character->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $character->has('home_visity') ? $this->Html->link($character->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $character->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($character->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($character->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($character->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= $this->Number->format($character->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($character->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expedition Date') ?></th>
            <td><?= h($character->expedition_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observations Personal Information') ?></h4>
        <?= $this->Text->autoParagraph(h($character->observations_personal_information)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departures') ?></h4>
        <?php if (!empty($character->departures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Time Stay') ?></th>
                <th scope="col"><?= __('Reason') ?></th>
                <th scope="col"><?= __('Character Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($character->departures as $departures): ?>
            <tr>
                <td><?= h($departures->id) ?></td>
                <td><?= h($departures->place) ?></td>
                <td><?= h($departures->date) ?></td>
                <td><?= h($departures->time_stay) ?></td>
                <td><?= h($departures->reason) ?></td>
                <td><?= h($departures->character_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departures', 'action' => 'view', $departures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departures', 'action' => 'edit', $departures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departures', 'action' => 'delete', $departures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Licenses') ?></h4>
        <?php if (!empty($character->licenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Categories') ?></th>
                <th scope="col"><?= __('Fines') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Reverse') ?></th>
                <th scope="col"><?= __('Character Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($character->licenses as $licenses): ?>
            <tr>
                <td><?= h($licenses->id) ?></td>
                <td><?= h($licenses->number) ?></td>
                <td><?= h($licenses->categories) ?></td>
                <td><?= h($licenses->fines) ?></td>
                <td><?= h($licenses->front) ?></td>
                <td><?= h($licenses->reverse) ?></td>
                <td><?= h($licenses->character_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Licenses', 'action' => 'view', $licenses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Licenses', 'action' => 'edit', $licenses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Licenses', 'action' => 'delete', $licenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licenses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notebooks') ?></h4>
        <?php if (!empty($character->notebooks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Class') ?></th>
                <th scope="col"><?= __('Military District') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Character Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($character->notebooks as $notebooks): ?>
            <tr>
                <td><?= h($notebooks->id) ?></td>
                <td><?= h($notebooks->number) ?></td>
                <td><?= h($notebooks->class) ?></td>
                <td><?= h($notebooks->military_district) ?></td>
                <td><?= h($notebooks->front) ?></td>
                <td><?= h($notebooks->character_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notebooks', 'action' => 'view', $notebooks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notebooks', 'action' => 'edit', $notebooks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notebooks', 'action' => 'delete', $notebooks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notebooks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Passports') ?></h4>
        <?php if (!empty($character->passports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Expiration Date') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Character Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($character->passports as $passports): ?>
            <tr>
                <td><?= h($passports->id) ?></td>
                <td><?= h($passports->number) ?></td>
                <td><?= h($passports->expiration_date) ?></td>
                <td><?= h($passports->front) ?></td>
                <td><?= h($passports->character_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Passports', 'action' => 'view', $passports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Passports', 'action' => 'edit', $passports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Passports', 'action' => 'delete', $passports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $passports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
