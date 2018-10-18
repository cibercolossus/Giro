<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result $result
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $result->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Components'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Component'), ['controller' => 'Components', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inspections'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inspection'), ['controller' => 'Inspections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="results form large-9 medium-8 columns content">
    <?= $this->Form->create($result) ?>
    <fieldset>
        <legend><?= __('Edit Result') ?></legend>
        <?php
            echo $this->Form->control('yes');
            echo $this->Form->control('no');
            echo $this->Form->control('na');
            echo $this->Form->control('qty_question');
            echo $this->Form->control('component_id', ['options' => $components]);
            echo $this->Form->control('inspection_id', ['options' => $inspections]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
