
<div class="header">
	<div class="container">

		<div class="row-fluid">
			<div class="span12">
				<div class="description-texts">
					<div class="site-slogan" style="text-align:left;"><img src="/img/onecoin-logo.png"></div>
					<p class="app-description" style="text-align:left;">
						<span>いっしょに歩こう</span>
					</p>
				</div>
			</div>
		</div>

		<div class="row-fluid" id="registrant">
			<div class="span12">
				<div class="app-buttons" style="text-align:center;">
					<div class="registrant-message">
						<p>事前登録はこちらから</p>
						<p>事前登録頂くとリリース時に率先してご案内させて頂きます</p>
					</div>
					<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
					<?php echo $this->Form->input('email', ['class' => 'input-small registrant-email', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス']);?>
						<button type="submit" class="btn header-btn">登録</button>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</div><!-- /header -->
<script>
/*
$(".header").bgswitcher({
	images: ['../img/bg1.jpg'],
	interval : 5000
});
*/
</script>

<div class="grid-features">
	<div class="container">
		<div class="row-fluid">
			<div class="span12" style="text-align:center;">
				<span class="feature-message">
					<p>愛犬との散歩、誰かといっしょに出かけませんか？</p>
				</span>
				<span class="feature-notice">
					<p>ONECOINは犬の散歩をみんなでシェアするサービスです</p>
				</span>
			</div>
		</div>
		<div class="row-fluid">

			<div class="span4 text-center grid-feature">
				<div class="shape darkblue">
					<i class="icon-home"></i>
				</div>
				<h3 class="title">いつもの散歩を<br>そのままシェア</h3>
				<p style="text-align:left;">30分から1時間程度のいつもの散歩を犬好きのみんなに共有してみましょう。特別な散歩コースは必要ありません。たとえば犬が飼えない犬好きの人にとって、あなたのいつもの散歩は実は十分価値があります。散歩は500円から応募することができます。</p>
			</div>

			<div class="span4 text-center grid-feature">
				<div class="shape pink">
					<i class="icon-comments"></i>
				</div>
				<h3 class="title">犬バナしながら<br>散歩しましょう</h3>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
			</div><!-- /span4 -->

			<div class="span4 text-center grid-feature">
				<div class="shape lightblue">
					<i class="icon-smile"></i>
				</div>
				<h3 class="title">寄付で犬も喜ぶ<br>みんな嬉しい</h3>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
			</div><!-- /span4 -->

		</div> <!-- /row-fluid -->
	</div> <!-- /container -->
</div><!-- /grid-features -->

<div class="testimonials">

	<div class="container">
		<div class="row-fluid">
			<div class="span12 guest-message">
				いろんな犬と人と、もっと散歩しよう
			</div>
			<span class="guest-notice">
				<p>犬と人の数、それよりもっと多くのいろんな散歩の形があります</p>
			</span>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">

			<div class="span2">
				<div class="testimonail" id="dog1">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image textimonial-image-1">
								<img class="img-circle" src="/img/dog1.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> セントバーナードと30分海沿いを歩きませんか？見かけによらず人懐こいですよ^^ <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">海沿いをぶらり</a></h5>
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

			<script>
				$testimonials = $('.testimonail');
				$.each($testimonials, function(index, val) {
					$testimonail = $(val);

					$testimonail.jrumble({
						speed: 100
					});
					var top = $testimonail.css('top');
					var left = $testimonail.css('left');
					var _webkit_transform = $testimonail.css('-webkit-transform');
					var _moz_transform = $testimonail.css('-moz-transform');
					var _ms_transform = $testimonail.css('-ms-transform');
					var _o_transform = $testimonail.css('-o-transform');
					var transform = $testimonail.css('transform');

					$testimonail.hover(function(){
						//$(this).trigger('startRumble');
					}, function(){
						/*$(this).trigger('stopRumble');
						$(this).css('top', top);
						$(this).css('left', left);
						$(this).css('-webkit-transform', _webkit_transform);
						$(this).css('-moz-transform', _moz_transform);
						$(this).css('-ms-transform', _ms_transform);
						$(this).css('-o-transform', _o_transform);
						$(this).css('transform', transform);*/
					});
				});
			</script>

		</div>
	</div>
</div><!-- /pricing-table -->

<div class="contact">

	<div id="is-saved" style="display:none;"><?= $saved ?></div>
	<div class="container">
		<div class="row-fluid">

			<div class="span12">
				<h3 class="title">ONECOINは現在開発中のサービスです</h3>
				<p>We are here to answer any kind of question donec aliquet mattis libero, ac porttitor leo ultricies nec. Integer aliquam aliquam tempor. Maecenas congue adipiscing cursus. Pellentesque quis est at justo dignissim iaculis. Vestibulum egestas nibh eu tortor ultrices venenatis.</p>
				<h4>いつもの散歩をリデザインする</h4>
				<p>We are here to answer any kind of question donec aliquet mattis libero, ac porttitor leo ultricies nec. Integer aliquam aliquam tempor. Maecenas congue adipiscing cursus. Pellentesque quis est at justo dignissim iaculis. Vestibulum egestas nibh eu tortor ultrices venenatis.</p>
				<ul>
					<li>あああ</li>
					<li>いいい</li>
				</ul>
				<p>We are here to answer any kind of question donec aliquet mattis libero, ac porttitor leo ultricies nec. Integer aliquam aliquam tempor. Maecenas congue adipiscing cursus. Pellentesque quis est at justo dignissim iaculis. Vestibulum egestas nibh eu tortor ultrices venenatis.</p>
				<p class="address"><i class="icon-envelop"></i> contact@onecoin-dog.com
			</div>

		</div> <!-- /row-fluid -->
		<div class="row-fluid">
			<div class="span12">
				<div class="app-buttons" style="text-align:center;">
					<div class="registrant-message" style="color:white;">
						<p>事前登録はこちらから</p>
						<p>事前登録頂くとリリース時に率先してご案内させて頂きます</p>
					</div>
					<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
					<?php echo $this->Form->input('email', ['class' => 'input-small registrant-email', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス']);?>
						<button type="submit" class="btn header-btn">登録</button>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</div><!-- /contact -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">ご登録ありがとうございました</h3>
	</div>
	<div id="myModalBody" class="modal-body">

		<style>
		.share .twitter, .share .facebook {
		  display: inline-block;
		  vertical-align: top;
		}
		.share .facebook {
		  width: 90px;
		  overflow: hidden;
		}
		.share .twitter {
		  width: 100px;
		  overflow: hidden;
		}
		</style>

		<p>リリース時期が近づいて参りましたらまたご連絡させて頂きます。よろしければOneCoinをぜひお友達にシェアください。</p>

		<div class="share pull-right">
			<div class="facebook">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-share-button" data-href="https://onecoin-dog.herokuapp.com" data-layout="button_count"></div>
			</div>
			<div class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://onecoin-dog.herokuapp.com" data-lang="ja">ツイート</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="custom-btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>


