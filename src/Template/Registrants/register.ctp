
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
	</div>
		<div class="row-fluid" id="registrant">
			<div class="span12">
				<div class="app-buttons" style="text-align:center;">
					<div class="registrant-box">
						<div class="registrant-message">
							<p style="font-size:large;">事前登録はこちらから</p>
							<p>ご登録頂くとリリース時に率先してお知らせ致します</p>
						</div>
						<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
							<p>
							<?= $this->Form->input('email', ['class' => 'input-small registrant-email', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス']);?>
							</p>
							<p style="color:black;">
								現在、犬を <?= $this->Form->input('comment', ['class' => 'input-small', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'style' => 'border:1px solid #eee;width:180px;height:40px;', 'options' => ['own' => '飼っている', 'willown' => '飼う予定がある','notown' => '飼っていない']]);?>
								<button type="submit" class="btn header-btn" style="color:black;">登録</button>
							</p>

						<?= $this->Form->end(); ?>
					</div>
					<div class="share share-front pull-right">
						<div class="facebook">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-share-button" data-href="http://onecoindog.com" data-layout="button_count"></div>
						</div>
						<div class="twitter">
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.onecoindog.com" data-lang="ja">ツイート</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
					</div>
				</div>
			</div>
		</div>

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
					<p>ONECOINは犬の散歩をみんなでシェアする「お散歩マーケットプレイス」です</p>
				</span>
			</div>
		</div>
		<div class="row-fluid">

			<div class="span4 text-center grid-feature">
				<div class="shape darkblue">
				</div>
				<h3 class="title">いつもの散歩を<br>そのままシェア</h3>
				<p style="text-align:left;">30分から1時間程度の散歩を犬好きのみんなにシェアしましょう！500円から値付けして登録することができます。</p>
			</div>

			<div class="span4 text-center grid-feature">
				<div class="shape pink">
				</div>
				<h3 class="title">犬バナしながら<br>散歩しましょう</h3>
				<p style="text-align:left;">応募者と一緒に犬の話や地域の話を楽しみながら散歩しましょう。犬好き同士会話は盛り上がるはずです！</p>
			</div><!-- /span4 -->

			<div class="span4 text-center grid-feature">
				<div class="shape lightblue">
				</div>
				<h3 class="title">寄付で犬も喜ぶ<br>みんな嬉しい</h3>
				<p style="text-align:left;">散歩の後にあなたの値付けに応じてお金が支払われます。全額又は一部を動物愛護団体に寄付する事ができます。</p>
			</div><!-- /span4 -->

		</div> <!-- /row-fluid -->
	</div> <!-- /container -->
</div><!-- /grid-features -->

<div class="testimonials">

	<div class="container">
		<div class="row-fluid">
			<div class="span12 guest-message">
				いろんな犬と人と、もっと会って歩こう
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
							<div class="textimonial-image textimonial-image-2">
								<img class="img-circle" src="/img/dog2.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> いつも下町を歩いています。○○商店街を通って、住宅街を回って1時間のコースです。途中のたい焼きが美味しいです。<i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">下町の散歩</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog3">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image textimonial-image-3">
								<img class="img-circle" src="/img/dog3.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> ○○周辺の公園で散歩してます。室内犬なので運動不足解消によくフリスビーで遊んでいます。一緒にフリスビーしましょう。 <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">公園でフリスビー</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog4">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image textimonial-image-4">
								<img class="img-circle" src="/img/dog4.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> ダックスフンドの○○君と多摩川をいつも散歩してます。川辺のグランドの野球観戦が最近のお気に入りです。 <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">川辺の散歩</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog5">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image textimonial-image-5">
								<img class="img-circle" src="/img/dog5.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> 週末は犬連れOKのカフェでランチすることが多いです。もし良かったらカフェめぐりにお付き合いください。 <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">都内のカフェ</a></h5>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="span2">
				<div class="testimonail" id="dog6">
					<div class="testimonail-text">
						<blockquote>
							<div class="textimonial-image textimonial-image-6">
								<img class="img-circle" src="/img/dog6.jpg" width="100" height="100" alt="avatar image"/>
							</div>
							<p style="text-align:left;"><i class="icon-quote-left"></i> 近所の低い山をよく一緒に犬とハイキングしています。春は花も綺麗ですよ。 <i class="icon-quote-right"></i><p>
							<h5 class="title"><a href="#">山の散歩</a></h5>
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

<div class="grid-features2">
	<div class="container">
		<div class="row-fluid">
			<div class="span12" style="text-align:center;">
				<span class="feature-message">
					<p>犬が喜ぶ寄付を一緒に</p>
				</span>
				<span class="feature-notice">
					<p>支払われた金額の一部が<a href="http://onelove.cc/">ONE LOVEプロジェクト</a>を通して動物愛護の団体に寄付されます</p>
					<p class="don-notice">※ システム利用料を差し引いた、利用者が任意に設定した比率（10%~100%）に応じた金額が寄付されます</p>
				</span>
			</div>
			<div class="span12 donation-list" style="text-align:center;">
				<ul>
					<li>
						<div class="donation-item" style="border-style: none dashed dashed none;">
							<a href="http://www.npo-alis.org/">
								<img src="/img/don_logo_01.jpg" />
								<h5 class="title">NPO法人 日本動物生命尊重の会</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none dashed dashed none;">
							<a href="http://www.chibawan.net/">
								<img src="/img/don_logo_02.jpg" />
								<h5 class="title">ちばわん</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none dashed dashed none;">
							<a href="http://www.arkbark.net/">
								<img src="/img/don_logo_03.jpg" />
								<h5 class="title">NPO法人 アニマルレフュージ関西／ARK</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none none dashed none;">
							<a href="http://www.wonderful-dogs.com/">
								<img src="/img/don_logo_04.jpg" />
								<h5 class="title">NPO法人 Wonderful Dogs</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none dashed none none;">
							<a href="http://i-dog.net/">
								<img src="/img/don_logo_05.jpg" />
								<h5 class="title">石川ドッグレスキュー</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none dashed none none;">
							<a href="http://www.inochinokai.com/">
								<img src="/img/don_logo_06.jpg" />
								<h5 class="title">動物いのちの会いわて</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item" style="border-style: none dashed none none;">
							<a href="http://dogshelter.jp/">
								<img src="/img/don_logo_07.jpg" />
								<h5 class="title">Dog Shelter</h5>
							</a>
						</div>
					</li>
					<li>
						<div class="donation-item onelove" style="border-style: none none none none;">
							<a href="http://onelove.cc/">
								<img src="/img/don_logo_08.png" />
							</a>
						</div>
					</li>
				</ul>

			</div>
			<div class="span12" style="text-align:right;">
				<span class="feature-notice" style="text-align:right;">
					<p class="don-notice">※ 上記団体はONE LOVEプロジェクトを通して寄付実績のある団体例になります。</p>
				</span>
			</div>
		</div>

		<div class="row-fluid">



		</div> <!-- /row-fluid -->
	</div> <!-- /container -->
</div><!-- /grid-features -->

<div class="contact">

	<div id="is-saved" style="display:none;"><?= $saved ?></div>
	<div class="container">
		<div class="row-fluid">

			<div class="span12">
				<h3 class="title">犬との暮らしをもっと面白く</h3>
				<h4>いつもの散歩をリデザインする</h4>
				<p>犬は飼うには少し手間がかかります。特に散歩は毎日の事で、マンネリ化しやすく時に面倒に感じる時もあるのではないでしょうか。ONECOINではそんな犬の散歩をみんなとシェアする事でもっと楽しく犬と共生できるのではないかと考えサービスを開発しています。</p>
				<ul>
					<li>マンネリ解消</li>
					<li>犬好き同士の交流</li>
					<li>しつけに関する相談</li>
					<li>寄付の機会</li>
				</ul>
				<p> 犬が好きで犬を飼っている人にも、犬が好きだけど飼うのが難しい人にも、両者にとって役立つサービスになればと思います。 </p>
				<h4>ONECOINは現在開発中のサービスです</h4>
				<p>本サービスは2015年夏のサービスリリースを目指して現在開発中です。事前登録頂いた皆様には、率先して情報提供させて頂くとともに今後アンケートなどのご協力を頂くことがあります。もし本サービスの内容にご興味があり使ってみたいと思われた場合はぜひ下記のフォームより事前登録をお願いします。</p>
				<p>その他のサービスに関するお問い合わせは下記にメールをお願いします。</p>
				<p class="address"><i class="icon-envelop"></i> contact@onecoindog.com
			</div>

		</div> <!-- /row-fluid -->
	</div>
	<div class="row-fluid contact-bottom" id="registrant2">
		<div class="span12">
			<div class="app-buttons" style="text-align:center;">
				<div class="registrant-box2" style="color:white;">
					<div class="registrant-message">
						<p style="font-size:large;color:white;">事前登録はこちらから</p>
						<p style="color:white;">ご登録頂くとリリース時に率先してお知らせ致します</p>
					</div>
					<?= $this->Form->create($registrant, ['class' => 'form-inline']); ?>
						<p>
						<?= $this->Form->input('email', ['class' => 'input-small registrant-email', 'templates' => ['inputContainer' => '{{content}}',], 'label' => false, 'placeholder' => 'メールアドレス']);?>
						</p>
						<p style="color:white;">
							現在、犬を <?= $this->Form->input('comment', ['class' => 'input-small', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'style' => 'border:1px solid #eee;width:180px;height:40px;', 'options' => ['own' => '飼っている', 'willown' => '飼う予定がある','notown' => '飼っていない']]);?>
							<button type="submit" class="btn header-btn" style="color:black;">登録</button>
						</p>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- /contact -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">ご登録ありがとうございます</h3>
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

		<p>リリース時期が近づいて参りましたらご連絡させて頂きます。よろしければONECOINをぜひお友達にシェアお願い致します。</p>

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
			<div class="fb-share-button" data-href="http://onecoindog.com" data-layout="button_count"></div>
			</div>
			<div class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://onecoindog.com" data-lang="ja">ツイート</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="custom-btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>


