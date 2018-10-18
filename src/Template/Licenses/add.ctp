<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\License $license
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licenses form large-9 medium-8 columns content">
    <?= $this->Form->create($license) ?>
    <fieldset>
        <legend><?= __('Add License') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('categories');
            echo $this->Form->control('fines');
            echo $this->Form->control('front');
            echo $this->Form->control('reverse');
            echo $this->Form->control('character_id', ['options' => $characters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
