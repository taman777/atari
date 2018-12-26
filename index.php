<?php
session_start();
/**
 * 誰かがなにかあたっちゃうよ PHP
 * サーバーにアップロードして動かすだけ！
 * @author T.Satoh @ 01wave 
 */
$player_list = array();

$flg = true;

if ( strpos( $_SERVER['HTTP_REFERER'], "https://01wave.jp/dl/" ) === false ) {
	// 強制リセット
	$flg = false;
}

$cnt = 0;

// 参加者リストが存在する および リセットボタンを押されていない かつ 前の画面は正しい画面 の場合
if ( ! empty( $_SESSION['player_list'] ) && "reset" !== $_POST['reset'] && $flg === true ) {
    $item_list = $_SESSION['item_list'];
	$player_list = $_SESSION['player_list'];
    $cnt = (int) $_SESSION['save_cnt'];
    $cnt ++;
    $_SESSION['save_cnt'] = $cnt;

} else {

    // 初回起動時、リセット時に リストを生成する
    unset( $_SESSION['player_list'] );
    unset( $_SESSION['save_cnt'] );
    $_SESSION = array();

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
	// アイテムもシャッフルする場合は下の // をはずす
//    shuffle( $item_list );
    // 当選者リストシャッフル
	shuffle( $player_list );
	$_SESSION['player_list'] = $player_list;

	$_SESSION['item_list'] = $item_list;

	$cnt = 0;
	$_SESSION['save_cnt'] = $cnt;
}
$atari_obj = $player_list[ $cnt ];

// 当選者
$atari_name = $atari_obj[0];
$atari_job  = $atari_obj[1];
$atari_pr   = $atari_obj[2];

// 賞品
$item_obj   = $item_list[ $cnt ];

// 当選品
$item_name  = $item_obj[0];
$item_img   = ( $item_obj[1] !== "" ? $item_obj[1] : "no_image.png" );
$item_memo  = $item_obj[2];

// 次の賞品
if ( $cnt + 1 >= count( $item_list ) ) {
    $next_item_name = "";
} else {
	$next_item_obj   = $item_list[ $cnt + 1 ];

	$next_item_name = $next_item_obj[0];
	$next_item_img  = ( $next_item_obj[1] !== "" ? $next_item_obj[1] : "no_image.png" );
	$next_item_memo = $next_item_obj[2];
}
?><html>
<head>
<meta charset="UTF-8">
<title>ATARI! 20181214</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body style="text-align:center; background-color: pink;">
<?php if ( count( $item_list ) > $cnt ) { ?>
<form id="frm">
<div id="img01">
    <img src="./images/<?php echo $item_img; ?>" alt="<?php echo $item_memo; ?>" style="max-width: 85%;">
</div>
        <br>
    <fieldset style="text-align: center;">
        <legend><h2><?php echo $item_name; ?></h2></legend>
    <?php echo $item_memo; ?>
<div id="sya" class="tar"><?php echo $atari_job; ?><br><?php echo $atari_name; ?>さん、おめでとうございます！</div>
    </fieldset>
        <?php if ( $next_item_name != "" ) { ?>
        次の賞品は・・・「<?php echo $next_item_name; ?>」です。
        <?php } ?>
        <input id="btn" type="submit" value="抽選!" style="width:100%;height:100px;background-color:gray; font-size:32px; font-weight:bold;">

</form>
<?php } else { ?>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans:400,700);

        * { padding: 0; margin: 0; }

        body, html
        {
            width: 100%;
            height: 100%;
            font-family: "Droid Sans", arial, verdana, sans-serif;
            font-weight: 700;
            color: #ff6 !important;
            background-color: #000 !important;
            overflow: hidden;
        }

        #titles{
            position: absolute;
            width: 20em;
            height: 50em;
            bottom: 0;
            left: 50%;
            margin-left: -9em;
            font-size: 350%;
            font-weight: bold;
            text-align: justify;
            overflow: hidden;
            transform-origin: 50% 100%;
            transform: perspective(500px) rotateX(20deg);
        }
        #titles:after{
            position: absolute;
            content: ' ';
            left: 0;
            right: 0;
            top: 0;
            bottom: 60%;
            background-image: linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
            pointer-events: none;
        }
        #titlecontent{
            position: absolute;
            top: 100%;
            animation: scroll 100s linear 4s infinite;
        }
        @keyframes scroll {
            0% { top: 100%; }
            100% { top: -170%; }
        }
    </style>
    <div id="titles"><div id="titlecontent">
    <h2>終了でございます！！</h2>
    <h3>ありがとうございました。</h3>
    <?php
    $cnt = 0;
    foreach( $player_list as $player ) {
	    if ( count( $item_list ) > $cnt ) {
		    $item = $item_list[ $cnt ];
		    $cnt ++;
		    ?>
		    <?php echo $player[1]; ?><?php echo $player[0]; ?>さん ： <?php echo $item[0]; ?>
            <br><br>
	    <?php }
    }?>
    </div></div>
<?php } ?>
</fieldset>
<script>
    $(function(){
        $("ul li:even").css("color","blue");
        $("ul li:odd").css("color","red");
    });
</script>
<style>
    #img01:-webkit-full-screen {
        width: 80%;
        background-color: rgba(255,0,0,0.1);

    }
    #img01:-webkit-full-screen img {
        display: block;
        margin: 10% auto;
        cursor: pointer;
    }
    #img01 img {
        max-width: 50%;
        cursor: pointer;
    }
.sub {
    padding: 0.5em 1em;
    background: -moz-linear-gradient(#ffb03c, #ff708d);
    background: -webkit-linear-gradient(#ffb03c, #ff708d);
    background: linear-gradient(to right, #ffb03c, #ff708d);
    color: #FFF;
    font-size: 32px;
    font-weight: bold;
    display: none;
}
.tar {
    font-size: 32px;
    font-weight: bold;
    /*display: none;*/
}
</style>

<form method="post">
    <input type="submit" name="reset" value="reset">
</form>
</body>
</html>
