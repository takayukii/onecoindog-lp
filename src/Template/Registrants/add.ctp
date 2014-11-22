<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Registrants'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="registrants form large-10 medium-9 columns">
	<?= $this->Form->create($registrant); ?>
	<fieldset>
		<legend><?= __('Add Registrant') ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('comment');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>