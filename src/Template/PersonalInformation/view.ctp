<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonalInformation $personalInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personal Information'), ['action' => 'edit', $personalInformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personal Information'), ['action' => 'delete', $personalInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalInformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personal Information'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personal Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Country Departures'), ['controller' => 'CountryDepartures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country Departure'), ['controller' => 'CountryDepartures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Military Notebooks'), ['controller' => 'MilitaryNotebooks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Military Notebook'), ['controller' => 'MilitaryNotebooks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Passports'), ['controller' => 'Passports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passport'), ['controller' => 'Passports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personalInformation view large-9 medium-8 columns content">
    <h3><?= h($personalInformation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Birth Place') ?></th>
            <td><?= h($personalInformation->birth_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expedition Place') ?></th>
            <td><?= h($personalInformation->expedition_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blood Type') ?></th>
            <td><?= h($personalInformation->blood_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nickname') ?></th>
            <td><?= h($personalInformation->nickname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civil Status') ?></th>
            <td><?= h($personalInformation->civil_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($personalInformation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($personalInformation->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $personalInformation->has('home_visity') ? $this->Html->link($personalInformation->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $personalInformation->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($personalInformation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($personalInformation->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($personalInformation->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= $this->Number->format($personalInformation->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($personalInformation->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expedition Date') ?></th>
            <td><?= h($personalInformation->expedition_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Particular Signs') ?></h4>
        <?= $this->Text->autoParagraph(h($personalInformation->particular_signs)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observations Personal Information') ?></h4>
        <?= $this->Text->autoParagraph(h($personalInformation->observations_personal_information)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Country Departures') ?></h4>
        <?php if (!empty($personalInformation->country_departures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Time Stay') ?></th>
                <th scope="col"><?= __('Reason') ?></th>
                <th scope="col"><?= __('Personal Information Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($personalInformation->country_departures as $countryDepartures): ?>
            <tr>
                <td><?= h($countryDepartures->id) ?></td>
                <td><?= h($countryDepartures->place) ?></td>
                <td><?= h($countryDepartures->date) ?></td>
                <td><?= h($countryDepartures->time_stay) ?></td>
                <td><?= h($countryDepartures->reason) ?></td>
                <td><?= h($countryDepartures->personal_information_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CountryDepartures', 'action' => 'view', $countryDepartures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CountryDepartures', 'action' => 'edit', $countryDepartures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CountryDepartures', 'action' => 'delete', $countryDepartures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countryDepartures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Licenses') ?></h4>
        <?php if (!empty($personalInformation->licenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Categories') ?></th>
                <th scope="col"><?= __('Fines') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Reverse') ?></th>
                <th scope="col"><?= __('Personal Information Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($personalInformation->licenses as $licenses): ?>
            <tr>
                <td><?= h($licenses->id) ?></td>
                <td><?= h($licenses->number) ?></td>
                <td><?= h($licenses->categories) ?></td>
                <td><?= h($licenses->fines) ?></td>
                <td><?= h($licenses->front) ?></td>
                <td><?= h($licenses->reverse) ?></td>
                <td><?= h($licenses->personal_information_id) ?></td>
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
        <h4><?= __('Related Military Notebooks') ?></h4>
        <?php if (!empty($personalInformation->military_notebooks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Class') ?></th>
                <th scope="col"><?= __('Military District') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Personal Information Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($personalInformation->military_notebooks as $militaryNotebooks): ?>
            <tr>
                <td><?= h($militaryNotebooks->id) ?></td>
                <td><?= h($militaryNotebooks->class) ?></td>
                <td><?= h($militaryNotebooks->military_district) ?></td>
                <td><?= h($militaryNotebooks->front) ?></td>
                <td><?= h($militaryNotebooks->personal_information_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MilitaryNotebooks', 'action' => 'view', $militaryNotebooks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MilitaryNotebooks', 'action' => 'edit', $militaryNotebooks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MilitaryNotebooks', 'action' => 'delete', $militaryNotebooks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $militaryNotebooks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Passports') ?></h4>
        <?php if (!empty($personalInformation->passports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Expiration Date') ?></th>
                <th scope="col"><?= __('Front') ?></th>
                <th scope="col"><?= __('Personal Information Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($personalInformation->passports as $passports): ?>
            <tr>
                <td><?= h($passports->id) ?></td>
                <td><?= h($passports->number) ?></td>
                <td><?= h($passports->expiration_date) ?></td>
                <td><?= h($passports->front) ?></td>
                <td><?= h($passports->personal_information_id) ?></td>
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
