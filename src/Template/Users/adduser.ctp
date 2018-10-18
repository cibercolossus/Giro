<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-6 medium-6 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Registro de Usuario') ?></legend>
        <?php
            echo $this->Form->control('cc', ['label' => 'Cédula de Ciudadania']);
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('last_name', ['label' => 'Apellido']);
            echo $this->Form->control('position', ['label' => 'Cargo']);
            echo $this->Form->control('email', ['label' => 'Correo Electrónico']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->control('phone', ['label' => 'Telefono']);
            echo $this->Form->control('client_id', ['options' => $clients, 'label' => 'Empresa']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
