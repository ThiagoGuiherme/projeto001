<!-- Instalar o package Emmet no sublime -->
<!-- table>thead>tr>th*4^^tbody>tr>th*4 -->
<!-- CTRL + E -->
<div class="users index large-12 medium-12 columns content">
	<h3><?php echo 'Usuário' ?></h3>
	<table>
		<thead>
			<tr>
				<th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
				<th scope="col"><?php echo $this->Paginator->sort('nome'); ?></th>
				<th scope="col"><?php echo $this->Paginator->sort('email'); ?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($usuarios as $usuario): ?>
			<tr>
				<td><?php echo $usuario->id; ?></td>
				<td><?php echo $usuario->nome; ?></td>
				<td><?php echo $usuario->email; ?></td>
				<td>Ver Editar Apagar</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php
	echo $this->Html->link(('Cadastrar Usuário'),['controller' => 'users', 'action' => 'add']);
	?>
	<div class="paginator">
		<ul class="pagination">
			<?php echo $this->Paginator->first('<< ' . __('Primeira')); ?>
			<?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
			<?php echo $this->Paginator->numbers(); ?>
			<?php echo $this->Paginator->next(__('Próximo') . ' >'); ?>
			<?php echo $this->Paginator->last(__('Última') . ' >>'); ?>
		</ul>
		<p>
			<?php echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrado {{current}} registro(s) do total de {{count}}')]) ?>
		</p>
	</div>
</div>