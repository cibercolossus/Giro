<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialAspect $socialAspect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Social Aspects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialAspects form large-9 medium-8 columns content">
    <?= $this->Form->create($socialAspect) ?>
    <fieldset>
        <legend><?= __('Add Social Aspect') ?></legend>
        <?php
            echo $this->Form->control('health');
            echo $this->Form->control('legal_status');
            echo $this->Form->control('social_report');
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
