<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector[]|\Cake\Collection\CollectionInterface $sectors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departaments'), ['controller' => 'Departaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departament'), ['controller' => 'Departaments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Visities'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Visity'), ['controller' => 'HomeVisities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maps'), ['controller' => 'Maps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Map'), ['controller' => 'Maps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sectors index large-9 medium-8 columns content">
    <h3><?= __('Sectors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departament_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('neighborhood') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stratum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recidence_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commune') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risk_level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supermarket') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pilice_estation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hospitals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colleges') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shops') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clinic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parkland') ?></th>
                <th scope="col"><?= $this->Paginator->sort('university') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('center_christian') ?></th>
                <th scope="col"><?= $this->Paginator->sort('church') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stadium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access_roads') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transportation_service') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship_neighbors') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drug_dispensing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prostitution_zone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('high_impact_area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presence_animals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sewage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dump') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_visity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sectors as $sector): ?>
            <tr>
                <td><?= $this->Number->format($sector->id) ?></td>
                <td><?= $sector->has('departament') ? $this->Html->link($sector->departament->id, ['controller' => 'Departaments', 'action' => 'view', $sector->departament->id]) : '' ?></td>
                <td><?= $sector->has('municipality') ? $this->Html->link($sector->municipality->id, ['controller' => 'Municipalities', 'action' => 'view', $sector->municipality->id]) : '' ?></td>
                <td><?= h($sector->neighborhood) ?></td>
                <td><?= h($sector->stratum) ?></td>
                <td><?= h($sector->type) ?></td>
                <td><?= $this->Number->format($sector->recidence_time) ?></td>
                <td><?= h($sector->commune) ?></td>
                <td><?= h($sector->risk_level) ?></td>
                <td><?= h($sector->zone) ?></td>
                <td><?= h($sector->school) ?></td>
                <td><?= h($sector->supermarket) ?></td>
                <td><?= h($sector->pilice_estation) ?></td>
                <td><?= h($sector->hospitals) ?></td>
                <td><?= h($sector->parks) ?></td>
                <td><?= h($sector->colleges) ?></td>
                <td><?= h($sector->shops) ?></td>
                <td><?= h($sector->cai) ?></td>
                <td><?= h($sector->clinic) ?></td>
                <td><?= h($sector->parkland) ?></td>
                <td><?= h($sector->university) ?></td>
                <td><?= h($sector->mall) ?></td>
                <td><?= h($sector->center_christian) ?></td>
                <td><?= h($sector->church) ?></td>
                <td><?= h($sector->stadium) ?></td>
                <td><?= h($sector->access_roads) ?></td>
                <td><?= h($sector->transportation_service) ?></td>
                <td><?= h($sector->relationship_neighbors) ?></td>
                <td><?= h($sector->drug_dispensing) ?></td>
                <td><?= h($sector->prostitution_zone) ?></td>
                <td><?= h($sector->high_impact_area) ?></td>
                <td><?= h($sector->presence_animals) ?></td>
                <td><?= h($sector->sewage) ?></td>
                <td><?= h($sector->dump) ?></td>
                <td><?= $sector->has('home_visity') ? $this->Html->link($sector->home_visity->id, ['controller' => 'HomeVisities', 'action' => 'view', $sector->home_visity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sector->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sector->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sector->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
