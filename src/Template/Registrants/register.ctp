<div id="is-saved" style="display:none;"><?= $saved ?></div>
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
			<?php echo $this->Form->button(__('Submit'), ['class' => 'custom-btn']); ?>
			<!--<a id="onecoin-form-btn" href="#myModal" role="button" class="custom-btn" data-toggle="modal">Submit</a>-->
			<?= $this->Form->end(); ?>
		</div>

	</div> <!-- /row-fluid -->
</div> <!-- /container -->
