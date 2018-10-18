<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Economy $economy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Economy'), ['action' => 'edit', $economy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Economy'), ['action' => 'delete', $economy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $economy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Economies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Economy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bank Accounts'), ['controller' => 'BankAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank Account'), ['controller' => 'BankAccounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Income'), ['controller' => 'Income', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Income', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="economies view large-9 medium-8 columns content">
    <h3><?= h($economy->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $economy->has('home_visity') ? $this->Html->link($economy->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $economy->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($economy->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Home Economics') ?></h4>
        <?= $this->Text->autoParagraph(h($economy->home_economics)); ?>
    </div>
    <div class="row">
        <h4><?= __('Current Credits') ?></h4>
        <?= $this->Text->autoParagraph(h($economy->current_credits)); ?>
    </div>
    <div class="row">
        <h4><?= __('Furniture') ?></h4>
        <?= $this->Text->autoParagraph(h($economy->furniture)); ?>
    </div>
    <div class="row">
        <h4><?= __('Ummovables') ?></h4>
        <?= $this->Text->autoParagraph(h($economy->ummovables)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bank Accounts') ?></h4>
        <?php if (!empty($economy->bank_accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bank Name') ?></th>
                <th scope="col"><?= __('Account Type') ?></th>
                <th scope="col"><?= __('Economy Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($economy->bank_accounts as $bankAccounts): ?>
            <tr>
                <td><?= h($bankAccounts->id) ?></td>
                <td><?= h($bankAccounts->bank_name) ?></td>
                <td><?= h($bankAccounts->account_type) ?></td>
                <td><?= h($bankAccounts->economy_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BankAccounts', 'action' => 'view', $bankAccounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BankAccounts', 'action' => 'edit', $bankAccounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BankAccounts', 'action' => 'delete', $bankAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankAccounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Expenses') ?></h4>
        <?php if (!empty($economy->expenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Rent') ?></th>
                <th scope="col"><?= __('Public Services') ?></th>
                <th scope="col"><?= __('Feeding') ?></th>
                <th scope="col"><?= __('Education') ?></th>
                <th scope="col"><?= __('Transport') ?></th>
                <th scope="col"><?= __('Recreation') ?></th>
                <th scope="col"><?= __('Credit Cards') ?></th>
                <th scope="col"><?= __('Phone Plan') ?></th>
                <th scope="col"><?= __('Scheduled Savings') ?></th>
                <th scope="col"><?= __('Family Support') ?></th>
                <th scope="col"><?= __('Credits') ?></th>
                <th scope="col"><?= __('Others') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Economy Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($economy->expenses as $expenses): ?>
            <tr>
                <td><?= h($expenses->id) ?></td>
                <td><?= h($expenses->rent) ?></td>
                <td><?= h($expenses->public_services) ?></td>
                <td><?= h($expenses->feeding) ?></td>
                <td><?= h($expenses->education) ?></td>
                <td><?= h($expenses->transport) ?></td>
                <td><?= h($expenses->recreation) ?></td>
                <td><?= h($expenses->credit_cards) ?></td>
                <td><?= h($expenses->phone_plan) ?></td>
                <td><?= h($expenses->scheduled_savings) ?></td>
                <td><?= h($expenses->family_support) ?></td>
                <td><?= h($expenses->credits) ?></td>
                <td><?= h($expenses->others) ?></td>
                <td><?= h($expenses->total) ?></td>
                <td><?= h($expenses->economy_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Expenses', 'action' => 'view', $expenses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Expenses', 'action' => 'edit', $expenses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expenses', 'action' => 'delete', $expenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Income') ?></h4>
        <?php if (!empty($economy->income)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Monthly Income') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Economy Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($economy->income as $income): ?>
            <tr>
                <td><?= h($income->id) ?></td>
                <td><?= h($income->monthly_income) ?></td>
                <td><?= h($income->value) ?></td>
                <td><?= h($income->total) ?></td>
                <td><?= h($income->economy_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Income', 'action' => 'view', $income->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Income', 'action' => 'edit', $income->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Income', 'action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
