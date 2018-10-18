<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */
?>

<div class="homeVisities view large-12 medium-12 columns content">
    <h3><?= h($homeVisity->name.' '.$homeVisity->last_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($homeVisity->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($homeVisity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($homeVisity->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cédula de Ciudadanía') ?></th>
            <td><?= h($homeVisity->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono Principal') ?></th>
            <td><?= h($homeVisity->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono Opcional') ?></th>
            <td><?= h($homeVisity->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($homeVisity->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $homeVisity->has('user') ? $this->Html->link($homeVisity->user->email, ['controller' => 'Users', 'action' => 'view', $homeVisity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
             <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
            <td><?= $homeVisity->has('client') ? $this->Html->link($homeVisity->client->name, ['controller' => 'Clients', 'action' => 'view', $homeVisity->client->id]) : '' ?></td>
            <?php else: ?>
             <td><?= h($homeVisity->client->name) ?></td>
             <?php endif ?>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Iniciada') ?></th>
            <td><?= h($homeVisity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificada') ?></th>
            <td><?= h($homeVisity->modified) ?></td>
        </tr>
    </table>

    <div class="row">
        <h4><?= __('Dirección') ?></h4>
        <?= $this->Text->autoParagraph(h($homeVisity->address)); ?>
    </div>
    
</div>
