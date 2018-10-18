<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sector'), ['action' => 'edit', $sector->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sector'), ['action' => 'delete', $sector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sector->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departaments'), ['controller' => 'Departaments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departament'), ['controller' => 'Departaments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maps'), ['controller' => 'Maps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map'), ['controller' => 'Maps', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sectors view large-9 medium-8 columns content">
    <h3><?= h($sector->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departament') ?></th>
            <td><?= $sector->has('departament') ? $this->Html->link($sector->departament->id, ['controller' => 'Departaments', 'action' => 'view', $sector->departament->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipality') ?></th>
            <td><?= $sector->has('municipality') ? $this->Html->link($sector->municipality->id, ['controller' => 'Municipalities', 'action' => 'view', $sector->municipality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Neighborhood') ?></th>
            <td><?= h($sector->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stratum') ?></th>
            <td><?= h($sector->stratum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($sector->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commune') ?></th>
            <td><?= h($sector->commune) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risk Level') ?></th>
            <td><?= h($sector->risk_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= h($sector->zone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access Roads') ?></th>
            <td><?= h($sector->access_roads) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transportation Service') ?></th>
            <td><?= h($sector->transportation_service) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship Neighbors') ?></th>
            <td><?= h($sector->relationship_neighbors) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drug Dispensing') ?></th>
            <td><?= h($sector->drug_dispensing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prostitution Zone') ?></th>
            <td><?= h($sector->prostitution_zone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('High Impact Area') ?></th>
            <td><?= h($sector->high_impact_area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presence Animals') ?></th>
            <td><?= h($sector->presence_animals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sewage') ?></th>
            <td><?= h($sector->sewage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dump') ?></th>
            <td><?= h($sector->dump) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Visity') ?></th>
            <td><?= $sector->has('home_visity') ? $this->Html->link($sector->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $sector->home_visity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sector->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recidence Time') ?></th>
            <td><?= $this->Number->format($sector->recidence_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $sector->school ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supermarket') ?></th>
            <td><?= $sector->supermarket ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pilice Estation') ?></th>
            <td><?= $sector->pilice_estation ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hospitals') ?></th>
            <td><?= $sector->hospitals ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parks') ?></th>
            <td><?= $sector->parks ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colleges') ?></th>
            <td><?= $sector->colleges ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shops') ?></th>
            <td><?= $sector->shops ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cai') ?></th>
            <td><?= $sector->cai ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clinic') ?></th>
            <td><?= $sector->clinic ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parkland') ?></th>
            <td><?= $sector->parkland ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('University') ?></th>
            <td><?= $sector->university ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mall') ?></th>
            <td><?= $sector->mall ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Center Christian') ?></th>
            <td><?= $sector->center_christian ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Church') ?></th>
            <td><?= $sector->church ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stadium') ?></th>
            <td><?= $sector->stadium ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($sector->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Geographic Location') ?></h4>
        <?= $this->Text->autoParagraph(h($sector->geographic_location)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description Home') ?></h4>
        <?= $this->Text->autoParagraph(h($sector->description_home)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Maps') ?></h4>
        <?php if (!empty($sector->maps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Map') ?></th>
                <th scope="col"><?= __('Commune') ?></th>
                <th scope="col"><?= __('Sector Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sector->maps as $maps): ?>
            <tr>
                <td><?= h($maps->id) ?></td>
                <td><?= h($maps->map) ?></td>
                <td><?= h($maps->commune) ?></td>
                <td><?= h($maps->sector_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Maps', 'action' => 'view', $maps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Maps', 'action' => 'edit', $maps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maps', 'action' => 'delete', $maps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maps->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
