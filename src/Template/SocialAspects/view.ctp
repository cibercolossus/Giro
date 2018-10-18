<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialAspect $socialAspect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social Aspect'), ['action' => 'edit', $socialAspect->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social Aspect'), ['action' => 'delete', $socialAspect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialAspect->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Social Aspects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Aspect'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialAspects view large-9 medium-8 columns content">
    <h3><?= h($socialAspect->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $socialAspect->has('home_visity') ? $this->Html->link($socialAspect->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $socialAspect->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialAspect->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Health') ?></h4>
        <?= $this->Text->autoParagraph(h($socialAspect->health)); ?>
    </div>
    <div class="row">
        <h4><?= __('Legal Status') ?></h4>
        <?= $this->Text->autoParagraph(h($socialAspect->legal_status)); ?>
    </div>
    <div class="row">
        <h4><?= __('Social Report') ?></h4>
        <?= $this->Text->autoParagraph(h($socialAspect->social_report)); ?>
    </div>
</div>
