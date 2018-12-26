# atari
抽選する簡易的な php 

## 賞品を入れ替える
index.php の下記部分を変更する

```
    // 景品リスト
	$item_list = array(
		// 名称,  画像パス,   備考
		//  スイーツ1
		array( 'スイーツ （1つめ）', '', 'NHN Japan 様 から特選スイーツのプレゼント' ),
		//	モバイルバッテリー（赤）
		array(
			'モバイルバッテリー（赤）',
			'IMG_0163.JPG',
			'モバイルバッテリー LightningケーブルもマイクロUSBもついているのでラクラク！ しかも Lightningケーブルでの充電が出来ちゃう。
全部で3台。<br>赤'
		),
		//	LCD MP3プレーヤー
		array( 'LED MP3 プレーヤー', 'IMG_0161.JPG', '液晶画面付き MP3 プレーヤー<br>ウォーキングのオトモにｗ' ),
		//	ドローン1
		array( 'ドローン （1台目）', 'IMG_Drone.png', 'なんと！ドローンとケースのセット！！' ),
		//	Anker SoundCore mini
		array(
			'Anker SoundCore mini',
			'IMG_0159.JPG',
			'Bluetoothスピーカーと言えば Anker(アンカー)<br>Anker SouncCore mini ゴールドです。'
		),
		//	モバイルバッテリー（白）
		array(
			'モバイルバッテリー（白）',
			'IMG_0163.JPG',
			'モバイルバッテリー LightningケーブルもマイクロUSBもついているのでラクラク！ しかも Lightningケーブルでの充電が出来ちゃう。
全部で3台。<br>白'
		),
		//	Bluetoothキーボード
		array(
			'Bluetoothキーボード',
			'IMG_0164.JPG',
			'Bluetoothキーボード(US）<br>iPadなどを立て掛けて使える折りたたみキーボード！<br>秋葉原のケバブ屋さん近くで購入'
		),
		//	Bluetoothスピーカー
		array( 'Bluetooth スピーカー', 'IMG_0162.JPG', 'Bluetoothスピーカー ピンクがステキ！<br>ノーブランド' ),
		//	ドローン2
		array( 'ドローン （2台目）', 'IMG_Drone.png', 'なんと！ドローンとケースのセット！！' ),
		//  Plesk ポーチ
		array( 'Plesk ポーチ', 'IMG_0186.JPG', 'Plesk株式会社様 ご提供 ポーチ（1）' ),
		//	モバイルバッテリー（ピンク）
		array(
			'モバイルバッテリー（ピンク）',
			'IMG_0163.JPG',
			'モバイルバッテリー LightningケーブルもマイクロUSBもついているのでラクラク！ しかも Lightningケーブルでの充電が出来ちゃう。
全部で3台。<br>ピンク'
		),
		//	TOY Camera
		array( 'TOY Camera', 'IMG_0160.png', 'TOY Camera 音声付きのムービーも撮れる！' ),
		// Plesk ポーチ
		array( 'Plesk ポーチ', 'IMG_0186.JPG', 'Plesk株式会社様 ご提供 ポーチ（2）' ),
		//	echo spot
		array( 'Amazon echo spot', 'IMG_0158.JPG', 'もうとっくにご存知！？Amazon echo spot ですっ！' ),

		//	スイーツ2
		array( 'スイーツ （2つめ）', '', 'NHN Japan 様 から特選スイーツのプレゼント' ),

	);
```

## 参加者を変更する
index.php の下記部分を変更する

|名前|所属|PR|

で並んでます。

```
    // 参加者リスト （ プレゼントの数より 多いのが大前提 です！！ ）
	$player_list = array(
		// 名前   所属  PR
		array( '永野 英二（ながの えいじ）', '合同会社01wave', '' ), // 1
		array( '佐藤　毅（さとう たけし）', '合同会社01wave', '' ),  // 2
		array( '川原 慎介（かわはら しんすけ）', '合同会社01wave', '' ), // 3
		array( '宮成 真以（みやなり まい）', '合同会社01wave', '' ), // 4
		array( '冨永 みゆき（とみなが みゆき）', '合同会社01wave', '' ),    // 5
		array( '参加者A', '株式会社エー', '' ), // 6
		array( '参加者B', '株式会社ビー', '' ),   // 7
		array( '参加者C', 'フリーランス', '' ),   // 8
		array( '参加者D', 'Dの紋章', '' ),    // 9
		array( '参加者E', 'E Japan株式会社', '' ),  // 10
		array( '参加者F', 'Fコーポ', '' ),   // 11
		array( '参加者G', '株式会社GTI', '' ),   // 12
		array( '参加者H', 'HIT MAN', '' ),   // 13
		array( '参加者I', 'INTERNET なんちゃら', '' ),   // 14
		array( '参加者J', 'J-walk', '' ),   // 15
		array( '参加者K', 'K1 MAX', '' ),   // 16
		array( '参加者L', 'うりうり', '' ),   // 17
		array( '参加者M', 'Mの喜劇', '' ),   // 18

	);
```

### 動作デモはこちら
https://01wave.jp/dl/

第2回 BigName交流会にて使用しました。

## コツ
画像が大きいので一度すべて回してから「リセット」を押すとスムーズに描画されます。
あまりいろいろなことは考えていないソースですのでカスタマイズしまくってください。
