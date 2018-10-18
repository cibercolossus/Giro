<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcademicInformation $academicInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Academic Information'), ['action' => 'edit', $academicInformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Academic Information'), ['action' => 'delete', $academicInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academicInformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Academic Information'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="academicInformation view large-9 medium-8 columns content">
    <h3><?= h($academicInformation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $academicInformation->has('home_visity') ? $this->Html->link($academicInformation->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $academicInformation->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($academicInformation->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observations Academic Information') ?></h4>
        <?= $this->Text->autoParagraph(h($academicInformation->observations_Academic_information)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Studies') ?></h4>
        <?php if (!empty($academicInformation->studies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Studies') ?></th>
                <th scope="col"><?= __('Name Institution') ?></th>
                <th scope="col"><?= __('Obtained Title') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Registry Number') ?></th>
                <th scope="col"><?= __('Academic Information Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($academicInformation->studies as $studies): ?>
            <tr>
                <td><?= h($studies->id) ?></td>
                <td><?= h($studies->studies) ?></td>
                <td><?= h($studies->name_institution) ?></td>
                <td><?= h($studies->obtained_title) ?></td>
                <td><?= h($studies->date) ?></td>
                <td><?= h($studies->city) ?></td>
                <td><?= h($studies->registry_number) ?></td>
                <td><?= h($studies->academic_information_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Studies', 'action' => 'view', $studies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Studies', 'action' => 'edit', $studies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Studies', 'action' => 'delete', $studies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
