<div class="header">
	<div class="container">
		<div class="row-fluid">

			<div class="span6">
				<div class="description-texts">
					<h1 class="site-slogan" style="text-align:left;"><span>ONE COIN</span></h1>
					<p class="app-description" style="text-align:left;">
						<span>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae.</span>
					</p>

				</div>
			</div> <!-- /span7 -->
			<div class="span6">
			</div> <!-- /span7 -->

		</div> <!-- /row-fluid -->
		<div class="row-fluid">
			<div class="span12">
				<div class="app-buttons" style="text-align:center;">
					<div style="width:420px;text-align:left;margin-left:auto;margin-right:auto;">
						<p>事前登録はこちらから</p>
						<p>事前登録頂くと、リリース時に率先してご案内させて頂きます。</p>
					</div>
					<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
					<?php echo $this->Form->input('email', ['class' => 'input-small', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス', 'style' => 'width:340px;']);?>
						<button type="submit" class="header-btn" style="padding-left:25px;padding-right:25px;">登録</button>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</div><!-- /header -->


<div class="grid-features">
	<div class="container">
		<div class="row-fluid">

			<div class="span4 text-center grid-feature">
				<div class="shape darkblue">
					<i class="icon-html5"></i>
				</div>
				<h3 class="title">html 5</h3>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
			</div><!-- /span4 -->

			<div class="span4 text-center grid-feature">
				<div class="shape pink">
					<i class="icon-tablet"></i>
				</div>
				<h3 class="title">responsive</h3>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
			</div><!-- /span4 -->

			<div class="span4 text-center grid-feature">
				<div class="shape lightblue">
					<i class="icon-css3"></i>
				</div>
				<h3 class="title">css 3</h3>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
			</div><!-- /span4 -->

		</div> <!-- /row-fluid -->
	</div> <!-- /container -->
</div><!-- /grid-features -->

<div class="testimonials">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 guest-message">
				あああああ
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-fluid">

			<div class="span2">
				<div class="testimonail" id="dog1">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog2">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog3">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog4">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog5">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog6">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image">
								<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
							</div>
							<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">Loki luck</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

		</div>

	</div>

</div><!-- /pricing-table -->

<div class="contact">

	<div id="is-saved" style="display:none;"><?= $saved ?></div>
	<div class="container">
		<div class="row-fluid">

			<div class="span12">
				<h3 class="title">Any Questions or Feedback</h3>
				<p>We are here to answer any kind of question donec aliquet mattis libero, ac porttitor leo ultricies nec. Integer aliquam aliquam tempor. Maecenas congue adipiscing cursus. Pellentesque quis est at justo dignissim iaculis. Vestibulum egestas nibh eu tortor ultrices venenatis.</p>
				<p class="address"><i class="icon-building"></i> 413 Water St. New York, NY 10002 <span class="pull-right"><i class="icon-phone"></i> 555-555-55</span></p>
			</div>

		</div> <!-- /row-fluid -->
		<div class="row-fluid">
			<div class="span12">
				<div class="app-buttons" style="text-align:center;">
					<div style="width:420px;text-align:left;margin-left:auto;margin-right:auto;">
						<p>事前登録はこちらから</p>
						<p>事前登録頂くと、リリース時に率先してご案内させて頂きます。</p>
					</div>
					<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
					<?php echo $this->Form->input('email', ['class' => 'input-small', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス', 'style' => 'width:340px;']);?>
						<button type="submit" class="header-btn" style="padding-left:25px;padding-right:25px;">登録</button>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</div><!-- /contact -->
