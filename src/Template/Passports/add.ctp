<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Passport $passport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Passports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Characters'), ['controller' => 'Characters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Character'), ['controller' => 'Characters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="passports form large-9 medium-8 columns content">
    <?= $this->Form->create($passport) ?>
    <fieldset>
        <legend><?= __('Add Passport') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('expiration_date');
            echo $this->Form->control('front');
            echo $this->Form->control('character_id', ['options' => $characters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
