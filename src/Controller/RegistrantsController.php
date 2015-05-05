<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;

/**
 * Registrants Controller
 *
 * @property App\Model\Table\RegistrantsTable $Registrants
 */
class RegistrantsController extends AppController {

	public function register(){

		$saved = false;
		$this->layout = 'onecoin';

		$registrant = $this->Registrants->newEntity($this->request->data);
		if ($this->request->is('post')) {

			if ($this->Registrants->save($registrant)) {
				$this->Flash->success('事前登録が完了しました。');
				$saved = true;

				$to = $this->request->data['email'];
$body = <<< EOF
$to 様

「歩いて寄付するお散歩マーケットプレイス ONECOIN」に事前登録頂き有難うございました。

リリース時期が近づいて参りましたら率先してお知らせ致します。
それまで、ご期待に応えられるサービスになるよう鋭意開発して参ります。

もしよろしければこちらのアンケートもご記入よろしくお願いします。
http://goo.gl/forms/kcSYln3zb5

また、現在モニターご協力者様を募集しております。

■ 対象となる方
犬を飼っている方で、4〜5月の土日祝に都内近郊にて1時間ほど犬と触れ合いたい人と
一緒に愛犬の散歩をしていただける方。

もしモニターにご協力頂ける場合は下記のフォームからご登録をお願い致します。
https://docs.google.com/forms/d/1oftlYXFIGyHlGDCsWoL8Bnu4qg5QPBA9JIW0JRnJVU0/viewform

その他にご質問等ございましたら下記のメールアドレスまでお気軽にお問い合わせください。
contact@onecoindog.com

***************************************************************
歩いて寄付するお散歩マーケットプレイス ONECOIN
--
URL:  http://onecoindog.com/
MAIL: contact@onecoindog.com
***************************************************************
※ もし本メールに見に覚えがない場合はお知らせ頂ければ登録を削除させて頂きます。

EOF;

				$email = new Email('default');
				$email->to($to)
					->cc('contact@onecoindog.com')
					->subject('ONECOINの事前登録ありがとうございました')
					->send($body);

			} else {
				$this->Flash->error('事前登録に失敗しました。フォームの内容を再度ご確認ください。');
			}

		}
		$this->set(compact('registrant', 'saved'));

	}

}
