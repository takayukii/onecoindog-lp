<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Registrant'), ['action' => 'edit', $registrant->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Registrant'), ['action' => 'delete', $registrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrant->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Registrants'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Registrant'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="registrants view large-10 medium-9 columns">
	<h2><?= h($registrant->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($registrant->name) ?></p>
			<h6 class="subheader"><?= __('Email') ?></h6>
			<p><?= h($registrant->email) ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($registrant->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($registrant->created) ?></p>
			<h6 class="subheader"><?= __('Updated') ?></h6>
			<p><?= h($registrant->updated) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Comment') ?></h6>
			<?= $this->Text->autoParagraph(h($registrant->comment)); ?>

		</div>
	</div>
</div>
