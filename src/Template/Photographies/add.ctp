<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photography $photography
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Photographies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="photographies form large-9 medium-8 columns content">
    <?= $this->Form->create($photography) ?>
    <fieldset>
        <legend><?= __('Add Photography') ?></legend>
        <?php
            echo $this->Form->control('nomeclature');
            echo $this->Form->control('facade');
            echo $this->Form->control('candidate_family');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
