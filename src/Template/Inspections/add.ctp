<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista Inspecciones'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Resultados'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <?php endif ?>
    </ul>
</nav>
<div class="inspections form large-10 medium-10 columns content">
    <?= $this->Form->create($inspection) ?>
    <fieldset>
        <legend><?= __('Nueva Inspección') ?></legend>
         <?php echo $this->Form->control('client_id', ['options' => $clients, 'label' => 'Cliente', 'required' => 'true']); ?>
        
        <?php foreach ($systems as $sys): ?>
        <div>
            <ul>
               <li><h3><?= $this->Form->checkbox($sys->name, ['name' => '', 'value' => $sys->id, 'hiddenField' => false ,'onclick' => 'marcar(this.closest( "div" ),this)']); echo $sys->name?></h3>
                <ul>
                    <?php foreach ($sys->components as $com): ?>
                    <li style="margin-left: 30px"><?= $this->Form->checkbox($com->name, ['name' => $sys->id.'[]', 'value' => $com->id, 'hiddenField' => false]); echo $com->name ?></li>
                    <?php endforeach; ?>
                </ul>
                </li>
            </ul>
        </div>
        <?php endforeach; ?>
  
    </fieldset>
    <?= $this->Form->button(__('Iniciar',['onclick' => 'validar_form()'])) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">
function marcar(obj,chk) {
    elem=obj.getElementsByTagName('input');
  for(i=0;i<elem.length;i++)
    elem[i].checked=chk.checked;
}

$(document).ready(function(){
    $('button[type="submit"]').attr('disabled','disabled');
    $('input[type="checkbox"]').on( 'change', function() {
        if($(this).prop('checked')){
            $('button[type="submit"]').removeAttr('disabled');
        }else{
            $('button[type="submit"]').attr('disabled','disabled');
        }
     });
 });
</script>   
