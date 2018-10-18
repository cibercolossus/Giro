<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System[]|\Cake\Collection\CollectionInterface $systems
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Sistema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['controller' => 'Components', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['controller' => 'Components', 'action' => 'add']) ?></li>
    </ul>

</nav>
<div class="systems index large-10 medium-10 columns content">
    <h3><?= __('Sistemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($systems as $system): ?>
            <tr>
                <td><?= $this->Number->format($system->id) ?></td>
                <td><?= h($system->name) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $system->slug]) ?> &nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $system->slug]) ?> &nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $system->slug], ['confirm' => __('¿Esta seguro de borrar el sistema: {0}?', $system->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro (s) de {{count}} total')]) ?></p>
    </div>
</div>
