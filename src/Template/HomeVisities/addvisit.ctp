<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */

?>


<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
         <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li><?= $this->Html->link(__('Lista Visitas Domiciliarias'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
        
    </ul>
</nav>
<div class="homeVisities form large-10 medium-10 columns content">
    
</div>

