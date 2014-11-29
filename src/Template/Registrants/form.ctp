<div class="container">
	<div class="row-fluid">

		<div class="span6">
			<h3 class="title">Any Questions or Feedback</h3>
			<p>We are here to answer any kind of question donec aliquet mattis libero, ac porttitor leo ultricies nec. Integer aliquam aliquam tempor. Maecenas congue adipiscing cursus. Pellentesque quis est at justo dignissim iaculis. Vestibulum egestas nibh eu tortor ultrices venenatis.</p>
			<p class="address"><i class="icon-building"></i> 413 Water St. New York, NY 10002 <span class="pull-right"><i class="icon-phone"></i> 555-555-55</span></p>
		</div>

		<div class="span6">
			<?= $this->Form->create($registrant, ['class' => 'contact-form']); ?>
				<?php
					echo $this->Form->input('name', ['class' => 'input-block-level', 'label' => false, 'placeholder' => 'お名前']);
					echo $this->Form->input('email', ['class' => 'input-block-level', 'label' => false, 'placeholder' => 'メールアドレス']);
					echo $this->Form->input('comment', ['class' => 'input-block-level', 'rows' => 10, 'label' => false, 'placeholder' => 'コメント等ありましたら']);
				?>
			<?php // echo $this->Form->button(__('Submit'), ['class' => 'custom-btn']); ?>
			<a href="#myModal" role="button" class="custom-btn" data-toggle="modal">Submit</a>
			<?= $this->Form->end() ?>
		</div>

	</div> <!-- /row-fluid -->
</div> <!-- /container -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Modal header</h3>
	</div>
	<div class="modal-body">
		<p>One fine body…</p>
	</div>
	<div class="modal-footer">
		<button class="custom-btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>