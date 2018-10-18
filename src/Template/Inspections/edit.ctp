<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inspection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inspection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inspections'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inspections form large-10 medium-10 columns content">
    <?= $this->Form->create($inspection) ?>
    <fieldset>
        <legend><?= __('Edit Inspection') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('slug');
            echo $this->Form->control('client_id', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
