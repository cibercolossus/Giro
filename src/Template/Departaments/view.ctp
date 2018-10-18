<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departament $departament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departament'), ['action' => 'edit', $departament->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departament'), ['action' => 'delete', $departament->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departament->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departaments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departament'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departaments view large-9 medium-8 columns content">
    <h3><?= h($departament->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departament') ?></th>
            <td><?= h($departament->departament) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departament->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Municipalities') ?></h4>
        <?php if (!empty($departament->municipalities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Municipality') ?></th>
                <th scope="col"><?= __('Departament Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departament->municipalities as $municipalities): ?>
            <tr>
                <td><?= h($municipalities->id) ?></td>
                <td><?= h($municipalities->municipality) ?></td>
                <td><?= h($municipalities->departament_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Municipalities', 'action' => 'view', $municipalities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Municipalities', 'action' => 'edit', $municipalities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Municipalities', 'action' => 'delete', $municipalities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipalities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sectors') ?></h4>
        <?php if (!empty($departament->sectors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Departament Id') ?></th>
                <th scope="col"><?= __('Municipality Id') ?></th>
                <th scope="col"><?= __('Neighborhood') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Stratum') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Recidence Time') ?></th>
                <th scope="col"><?= __('Commune') ?></th>
                <th scope="col"><?= __('Risk Level') ?></th>
                <th scope="col"><?= __('Geographic Location') ?></th>
                <th scope="col"><?= __('Description Home') ?></th>
                <th scope="col"><?= __('Zone') ?></th>
                <th scope="col"><?= __('School') ?></th>
                <th scope="col"><?= __('Supermarket') ?></th>
                <th scope="col"><?= __('Pilice Estation') ?></th>
                <th scope="col"><?= __('Hospitals') ?></th>
                <th scope="col"><?= __('Parks') ?></th>
                <th scope="col"><?= __('Colleges') ?></th>
                <th scope="col"><?= __('Shops') ?></th>
                <th scope="col"><?= __('Cai') ?></th>
                <th scope="col"><?= __('Clinic') ?></th>
                <th scope="col"><?= __('Parkland') ?></th>
                <th scope="col"><?= __('University') ?></th>
                <th scope="col"><?= __('Mall') ?></th>
                <th scope="col"><?= __('Center Christian') ?></th>
                <th scope="col"><?= __('Church') ?></th>
                <th scope="col"><?= __('Stadium') ?></th>
                <th scope="col"><?= __('Access Roads') ?></th>
                <th scope="col"><?= __('Transportation Service') ?></th>
                <th scope="col"><?= __('Relationship Neighbors') ?></th>
                <th scope="col"><?= __('Drug Dispensing') ?></th>
                <th scope="col"><?= __('Prostitution Zone') ?></th>
                <th scope="col"><?= __('High Impact Area') ?></th>
                <th scope="col"><?= __('Presence Animals') ?></th>
                <th scope="col"><?= __('Sewage') ?></th>
                <th scope="col"><?= __('Dump') ?></th>
                <th scope="col"><?= __('Home Visity Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departament->sectors as $sectors): ?>
            <tr>
                <td><?= h($sectors->id) ?></td>
                <td><?= h($sectors->departament_id) ?></td>
                <td><?= h($sectors->municipality_id) ?></td>
                <td><?= h($sectors->neighborhood) ?></td>
                <td><?= h($sectors->address) ?></td>
                <td><?= h($sectors->stratum) ?></td>
                <td><?= h($sectors->type) ?></td>
                <td><?= h($sectors->recidence_time) ?></td>
                <td><?= h($sectors->commune) ?></td>
                <td><?= h($sectors->risk_level) ?></td>
                <td><?= h($sectors->geographic_location) ?></td>
                <td><?= h($sectors->description_home) ?></td>
                <td><?= h($sectors->zone) ?></td>
                <td><?= h($sectors->school) ?></td>
                <td><?= h($sectors->supermarket) ?></td>
                <td><?= h($sectors->pilice_estation) ?></td>
                <td><?= h($sectors->hospitals) ?></td>
                <td><?= h($sectors->parks) ?></td>
                <td><?= h($sectors->colleges) ?></td>
                <td><?= h($sectors->shops) ?></td>
                <td><?= h($sectors->cai) ?></td>
                <td><?= h($sectors->clinic) ?></td>
                <td><?= h($sectors->parkland) ?></td>
                <td><?= h($sectors->university) ?></td>
                <td><?= h($sectors->mall) ?></td>
                <td><?= h($sectors->center_christian) ?></td>
                <td><?= h($sectors->church) ?></td>
                <td><?= h($sectors->stadium) ?></td>
                <td><?= h($sectors->access_roads) ?></td>
                <td><?= h($sectors->transportation_service) ?></td>
                <td><?= h($sectors->relationship_neighbors) ?></td>
                <td><?= h($sectors->drug_dispensing) ?></td>
                <td><?= h($sectors->prostitution_zone) ?></td>
                <td><?= h($sectors->high_impact_area) ?></td>
                <td><?= h($sectors->presence_animals) ?></td>
                <td><?= h($sectors->sewage) ?></td>
                <td><?= h($sectors->dump) ?></td>
                <td><?= h($sectors->home_visity_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sectors', 'action' => 'view', $sectors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sectors', 'action' => 'edit', $sectors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sectors', 'action' => 'delete', $sectors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sectors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
