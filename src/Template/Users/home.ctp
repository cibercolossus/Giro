<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-12 columns content">
	<h2>Bienvenido <?= $this->Html->link($current_user['name'] . ' ' . $current_user['last_name'], ['controller' => 'Users', 'action' => 'view', $current_user['id']]) ?></h2>
</div>