<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Study[]|\Cake\Collection\CollectionInterface $studies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Study'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studies index large-9 medium-8 columns content">
    <h3><?= __('Studies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('studies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_institution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obtained_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registry_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('academic_information_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studies as $study): ?>
            <tr>
                <td><?= $this->Number->format($study->id) ?></td>
                <td><?= h($study->studies) ?></td>
                <td><?= h($study->name_institution) ?></td>
                <td><?= h($study->obtained_title) ?></td>
                <td><?= h($study->date) ?></td>
                <td><?= h($study->city) ?></td>
                <td><?= h($study->registry_number) ?></td>
                <td><?= $study->has('academic_information') ? $this->Html->link($study->academic_information->id, ['controller' => 'AcademicInformation', 'action' => 'view', $study->academic_information->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $study->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $study->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $study->id], ['confirm' => __('Are you sure you want to delete # {0}?', $study->id)]) ?>
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
