<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilitaryNotebook $militaryNotebook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Military Notebooks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="militaryNotebooks form large-9 medium-8 columns content">
    <?= $this->Form->create($militaryNotebook) ?>
    <fieldset>
        <legend><?= __('Add Military Notebook') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('class');
            echo $this->Form->control('military_district');
            echo $this->Form->control('front');
            echo $this->Form->control('character_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
