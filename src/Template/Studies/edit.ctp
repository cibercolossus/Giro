<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Study $study
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $study->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $study->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Information'), ['controller' => 'AcademicInformation', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studies form large-9 medium-8 columns content">
    <?= $this->Form->create($study) ?>
    <fieldset>
        <legend><?= __('Edit Study') ?></legend>
        <?php
            echo $this->Form->control('studies');
            echo $this->Form->control('name_institution');
            echo $this->Form->control('obtained_title');
            echo $this->Form->control('date');
            echo $this->Form->control('city');
            echo $this->Form->control('registry_number');
            echo $this->Form->control('academic_information_id', ['options' => $academicInformation]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
