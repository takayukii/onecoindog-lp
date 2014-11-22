<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Registrant'), ['action' => 'add']) ?></li>
	</ul>
</div>
<div class="registrants index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('name') ?></th>
			<th><?= $this->Paginator->sort('email') ?></th>
			<th><?= $this->Paginator->sort('comment') ?></th>
			<th><?= $this->Paginator->sort('created') ?></th>
			<th><?= $this->Paginator->sort('updated') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($registrants as $registrant): ?>
		<tr>
			<td><?= $this->Number->format($registrant->id) ?></td>
			<td><?= h($registrant->name) ?></td>
			<td><?= h($registrant->email) ?></td>
			<td><?= h($registrant->comment) ?></td>
			<td><?= h($registrant->created) ?></td>
			<td><?= h($registrant->updated) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $registrant->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrant->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrant->id)]) ?>
			</td>
		</tr>

	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->prev('< ' . __('previous')); ?>
			<?= $this->Paginator->numbers(); ?>
			<?=	$this->Paginator->next(__('next') . ' >'); ?>
		</ul>
		<p><?= $this->Paginator->counter(); ?></p>
	</div>
</div>
