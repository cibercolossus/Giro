<?php
/**
 *
 */
?>
 <nav class="top-bar expanded" data-topbar role="navigation">
        <div class="top-bar-section">
            <?php if(isset($current_user)): ?>
               
                    <ul class="left">
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
                        <li><?= $this->Html->link(__('USUARIOS'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('SISTEMAS'), ['controller' => 'Systems', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('COMPONENTES'), ['controller' => 'Components', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('ELEMENTOS'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('CONTROLES'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
                <?php endif ?>
                <?php if ($current_user['role'] === 'Comercial' or $current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
                        <li><?= $this->Html->link(__('CLIENTES'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
                <?php endif ?>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Auditor' or $current_user['role'] === 'Operador'): ?>
                        <li><?= $this->Html->link(__('INSPECCIONES'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
                <?php endif ?>
                <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador' or $current_user['role'] === 'Cliente' or $current_user['role'] === 'Visitador'): ?>
                        <li><?= $this->Html->link(__('VISITAS DOMICILIARIAS'), ['controller' => 'HomeVisities', 'action' => 'index']) ?></li>
                <?php endif ?>
                    </ul>
                
                     <ul class="right">
                         <li><?= $this->Html->link('SALIR', ['controller' => 'Users', 'action' => 'logout']) ?></li>
                    </ul>
                
            <?php else: ?>
            <ul class="right">
                <li><?= $this->Html->link('ENTRAR', ['controller' => 'Users', 'action' => 'login']) ?></li>
                <li><?= $this->Html->link('REGISTRARSE', ['controller' => 'Users', 'action' => 'adduser']) ?></li>
            </ul>
            <?php endif; ?>
        </div>
    </nav>