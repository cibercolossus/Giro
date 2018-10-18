<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Study $study
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Study'), ['action' => 'edit', $study->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Study'), ['action' => 'delete', $study->id], ['confirm' => __('Are you sure you want to delete # {0}?', $study->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Studies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Study'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studies view large-9 medium-8 columns content">
    <h3><?= h($study->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Studies') ?></th>
            <td><?= h($study->studies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Institution') ?></th>
            <td><?= h($study->name_institution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Obtained Title') ?></th>
            <td><?= h($study->obtained_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($study->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registry Number') ?></th>
            <td><?= h($study->registry_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Academic Information') ?></th>
            <td><?= $study->has('academic_information') ? $this->Html->link($study->academic_information->id, ['controller' => 'AcademicInformation', 'action' => 'view', $study->academic_information->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($study->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($study->date) ?></td>
        </tr>
    </table>
</div>
