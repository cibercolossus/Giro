<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System $system
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Sistema'), ['action' => 'edit', $system->slug]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Sistema'), ['action' => 'delete', $system->slug], ['confirm' => __('¿Esta seguro de borrar el sistema: {0}?', $system->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Sistemas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Sistema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['controller' => 'Components', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['controller' => 'Components', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="systems view large-10 medium-10 columns content">
    <h3><?= h($system->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($system->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($system->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($system->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($system->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Agregar Componente') ?></h4>
        <?= $this->Form->create(null,['url' => ['controller' => 'Components', 'action' => 'add']]); ?>
   
        <?php
            echo $this->Form->control('name', ['required'=> 'true', 'label' => 'Nombre']);
            echo $this->Form->control('system_id', ['type' => 'hidden', 'value' => $system->id]);
            echo $this->Form->control('redirect', ['type' => 'hidden', 'value' => '/systems/view/'.$system->slug]);
        ?>
    
        <?= $this->Form->button(__('Agregar')) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="related">
        <h4><?= __('Componentes') ?></h4>
        <?php if (!empty($system->components)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('#') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php $cont=1; ?>
            <?php foreach ($system->components as $components): ?>
            <tr>
                <td><?= h($cont) ?></td>
                <td><?= h($components->name) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Components', 'action' => 'view', $components->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Components', 'action' => 'edit', $components->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Components', 'action' => 'delete', $components->slug.' systems '.$system->slug], ['confirm' => __('¿Esta seguro de borrar el componente: {0}?', $components->name)]) ?>
                </td>
            </tr>
            <?php $cont++; ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
