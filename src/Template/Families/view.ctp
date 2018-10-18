<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Close Relatives'), ['controller' => 'CloseRelatives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Close Relative'), ['controller' => 'CloseRelatives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relatives'), ['controller' => 'Relatives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relative'), ['controller' => 'Relatives', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="families view large-9 medium-8 columns content">
    <h3><?= h($family->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $family->has('home_visity') ? $this->Html->link($family->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $family->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($family->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Family Information Analysis') ?></h4>
        <?= $this->Text->autoParagraph(h($family->family_information_analysis)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Close Relatives') ?></h4>
        <?php if (!empty($family->close_relatives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Relationship') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Cc') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Family Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($family->close_relatives as $closeRelatives): ?>
            <tr>
                <td><?= h($closeRelatives->id) ?></td>
                <td><?= h($closeRelatives->name) ?></td>
                <td><?= h($closeRelatives->last_name) ?></td>
                <td><?= h($closeRelatives->relationship) ?></td>
                <td><?= h($closeRelatives->age) ?></td>
                <td><?= h($closeRelatives->cc) ?></td>
                <td><?= h($closeRelatives->occupation) ?></td>
                <td><?= h($closeRelatives->phone) ?></td>
                <td><?= h($closeRelatives->family_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CloseRelatives', 'action' => 'view', $closeRelatives->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CloseRelatives', 'action' => 'edit', $closeRelatives->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CloseRelatives', 'action' => 'delete', $closeRelatives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closeRelatives->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Relatives') ?></h4>
        <?php if (!empty($family->relatives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Relationship') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Cc') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Family Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($family->relatives as $relatives): ?>
            <tr>
                <td><?= h($relatives->id) ?></td>
                <td><?= h($relatives->name) ?></td>
                <td><?= h($relatives->last_name) ?></td>
                <td><?= h($relatives->relationship) ?></td>
                <td><?= h($relatives->age) ?></td>
                <td><?= h($relatives->cc) ?></td>
                <td><?= h($relatives->occupation) ?></td>
                <td><?= h($relatives->phone) ?></td>
                <td><?= h($relatives->family_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Relatives', 'action' => 'view', $relatives->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Relatives', 'action' => 'edit', $relatives->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Relatives', 'action' => 'delete', $relatives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relatives->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
