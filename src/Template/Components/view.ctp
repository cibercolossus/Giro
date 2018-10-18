<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Component $component
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Componente'), ['action' => 'edit', $component->slug]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Componente'), ['action' => 'delete', $component->slug], ['confirm' => __('¿Esta seguro de borrar el componente: {0}?', $component->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Componente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Sistemas'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Sistema'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Elementos'), ['controller' => 'Elements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="components view large-10 medium-10 columns content">
    <h3><?= h($component->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($component->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $component->has('system') ? $this->Html->link($component->system->name, ['controller' => 'Systems', 'action' => 'view', $component->system->slug]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($component->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($component->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($component->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Agregar Elemento') ?></h4>
        <?= $this->Form->create(null,['url' => ['controller' => 'Elements', 'action' => 'add']]); ?>
   
        <?php
            echo $this->Form->control('name', ['required'=> 'true', 'label' => 'Nombre']);
            echo $this->Form->control('component_id', ['type' => 'hidden', 'value' => $component->id]);
            echo $this->Form->control('redirect', ['type' => 'hidden', 'value' => '/components/view/'.$component->slug]);
        ?>
    
        <?= $this->Form->button(__('Agregar')) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="related">
        <h4><?= __('Elementos') ?></h4>
        <?php if (!empty($component->elements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('#') ?></th>
                <th scope="col"><?= __('Name') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php $cont=1; ?>
            <?php foreach ($component->elements as $elements): ?>
            <tr>
                <td><?= h($cont) ?></td>
                <td><?= h($elements->name) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Elements', 'action' => 'view', $elements->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Elements', 'action' => 'edit', $elements->slug]) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Elements', 'action' => 'delete', $elements->slug.' components '.$component->slug], ['confirm' => __('¿Esta seguro de borrar el elemento: {0}?', $elements->name)]) ?>
                </td>
            </tr>
            <?php $cont++; ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>