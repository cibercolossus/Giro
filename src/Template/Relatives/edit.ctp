<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relative $relative
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relative->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relative->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Relatives'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relatives form large-9 medium-8 columns content">
    <?= $this->Form->create($relative) ?>
    <fieldset>
        <legend><?= __('Edit Relative') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('relationship');
            echo $this->Form->control('age');
            echo $this->Form->control('cc');
            echo $this->Form->control('occupation');
            echo $this->Form->control('phone');
            echo $this->Form->control('family_id', ['options' => $families]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
