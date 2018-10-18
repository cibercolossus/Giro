<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map $map
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $map->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $map->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maps'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maps form large-9 medium-8 columns content">
    <?= $this->Form->create($map) ?>
    <fieldset>
        <legend><?= __('Edit Map') ?></legend>
        <?php
            echo $this->Form->control('map');
            echo $this->Form->control('commune');
            echo $this->Form->control('sector_id', ['options' => $sectors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
