<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserVisity $userVisity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userVisity->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userVisity->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Visities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userVisities form large-9 medium-8 columns content">
    <?= $this->Form->create($userVisity) ?>
    <fieldset>
        <legend><?= __('Edit User Visity') ?></legend>
        <?php
            echo $this->Form->control('home_visity_id', ['options' => $homeVisities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
