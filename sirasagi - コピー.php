<?php
$userid = 94947450; // http://twitter.com/xxx(ユーザー名) 画面右下にあるrssフィードのリンク先 http://twitter.com/statuses/friends_timeline/99999999.rssから取得できます
$count  = 150;        // 表示したい数
$url = "https://twitter.com/statuses/user_timeline.xml?id={$userid}&count={$count}";

$rss = @simplexml_load_file($url);
date_default_timezone_set('Asia/Tokyo');

// ユーザ情報を取得
$data['user']['id']                = (string)$rss->status->user->id;
$data['user']['screen_name']       = (string)$rss->status->user->screen_name;       // ユーザ情報欄のユーザ名
$data['user']['profile_image_url'] = (string)$rss->status->user->profile_image_url; // プロフィール欄のアイコン画像
$data['user']['name']              = (string)$rss->status->user->name;              // プロフィール欄の名称
$data['user']['location']          = (string)$rss->status->user->location;          // プロフィール欄の現在地
$data['user']['url']               = (string)$rss->status->user->url;               // プロフィール欄のWeb
$data['user']['description']       = (string)$rss->status->user->description;       // プロフィール欄の自己紹介
$data['user']['created_at']        = strtotime((string)$rss->status->user->created_at);
$data['user']['time_zone']         = (string)$rss->status->user->time_zone;
$data['user']['utc_offset']        = (int)$rss->status->user->utc_offset;           // + n秒
$data['user']['lang']              = (string)$rss->status->user->lang;              // ja
$data['user']['followers_count']   = (int)$rss->status->user->followers_count[0];
$data['user']['friends_count']     = (int)$rss->status->user->friends_count[0];
$data['user']['favourites_count']  = (int)$rss->status->user->favourites_count[0];

// タイムライン情報を取得

foreach ($rss->status as $i) {
	$id = (string)$i->id;
	$data['timeline'][$id]['id']         = $id;
	$data['timeline'][$id]['text']       = (string)$i->text;
	$data['timeline'][$id]['created_at'] = LF__strtotime((string)$i->created_at);
	$data['timeline'][$id]['timestamp']  = LF__strtotime((string)$i->created_at) + $data['user']['utc_offset'];
}


//=====================================================
// 英米式日付書式(下記限定)をタイムスタンプに変換する
// 対応フォーマット例 : Sun Sep 19 12:34:56 +0900 2010
//=====================================================
function LF__strtotime( $str ) {
	$month_r = array(
		'january'=>1 , 'february'=>2 , 'march'=>3 , 'april'=>4 , 'may'=>5 , 'june'=>6 , 'july'=>7 , 'august'=>8 , 'september'=>9 , 'october'=>10 , 'november'=>11 , 'december'=>12 ,
		'jan'=>1 , 'feb'=>2 , 'mar'=>3 , 'apr'=>4 , 'may'=>5 , 'jun'=>6 , 'jul'=>7 , 'aug'=>8 , 'sep'=>9 , 'sept'=>9 , 'oct'=>10 , 'nov'=>11 , 'dec'=>12
	);
	list($week , $month_str , $day , $hms , $utc , $year) = explode( ' ' , $str );
	$month = @$month_r[strtolower($month_str)];
	$utc_sign = substr($utc , 0 , 1) == '-' ? -1 : 1;
	$utc_hh   = substr($utc , 1 , 2);
	$utc_mi   = substr($utc , 3 , 2);
	$utc_sec  = $utc_sign * $utc_hh *3600 + $utc_sign * $utc_mi * 60;
	$hms_r    = explode(':' , $hms);
	return      mktime( @$hms_r[0] , @$hms_r[1] , @$hms_r[2] , $month , $day , $year ) + $utc_sec;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
table {
/*	background-color: #fff */
}
td {
/*	font-size: 10pt */
}
.blue {
	color: #0000FF;
	font-weight:bold;
	padding: 15 0 0 0px;
}
.thanks{
    width:736px;
    text-align:left;
/*    letter-spacing:3px;
    line-height:130%; */
    margin:0px auto 10px;
    padding:5px 15px; 
    background-color:#ffffe6;
    border:dotted 1px #cfcfcf;
}
//-->
</style>

</head>
<center>
<div class=thanks>
2010年初夏から2011年春にかけてのサギのコロニーを中心としたサギの観察記録です。
意味不明の文章や削除してしまいたい文章もありますが、ツイッター(一部ブログ)に登録した記録をそのまま掲載します。</div>
<table cellpadding="4" cellspacing="4" width=75%>
<tr><td class="blue">＜コロニー発見＞</td></tr>
<tr><td bgcolor=#e6e6fa>2010.5.8 サイクリング中、河原の木々にシラサギがたくさん止まっているのを見つけた。隣り合った数本の木にコサギが20羽ぐらいとゴイサギが10～15羽ぐらい止まっていた。ゴイサギの中にはホシゴイも1羽いた。ゴイサギをこんなにまとめて見たのは初めてだ。双眼鏡で眺めていると、見知らぬ老夫人が話しかけてきて、以下のお話を聞かせてくれた。<br><br>
その夫人のお父さんは昔、野田の鷺山でサギのヒナを拾い、エサを与えて育てたことがあるそうです。ヒナは育ち、巣立ちしましたが、お父さんが名前を呼ぶと空から舞い降りて、寄って来たそうです。<br>
<br>
注） 野田の鷺山：昭和40年代頃まではサギがたくさんいた。全国で最も有名な鷺山だった。</td></tr>
<tr><td class="blue">＜観察開始＞</td></tr>
<tr><td bgcolor=#ffffff>2010.5.14 ゴイサギは30羽弱、シラサギは30羽強、川の対岸からのカウント結果である。サギが木の枝に止まっているる範囲がコロニーを初めて見たときよりも、川に沿って長くなっている。シラサギは足が黄色いのと黒いのが混じっている。黒いのはもしかして、チュウサギだろうか。ゴイサギもシラサギも小枝をくわえては、戻って来ている。巣作りをしているのだろうか？。</td></tr>
<tr><td bgcolor=#e6e6fa>2010.5.15 いつもは午後、観察に出かけるのだが、今日は珍しく朝の8時過ぎに出かけた。ゴイサギは35羽、シラサギは40羽強、確認できた。目の周りが薄緑色で、首の長いシラサギが１羽確認できた。ダイサギだ。脚の上半分がピンク色だったかも知れない。（そういう個体がいたのは間違いないが、ダイサギだったか他の個体だったか定かでない。</td></tr>
<?php 
    $num = 0;
    $data_rev = array_reverse($data['timeline']);

//  foreach ($data['timeline'] as $r) { 
    foreach ($data_rev as $r) { 
	$vpos1 = strpos($r['text'],"シラサギ");
	$vpos2 = strpos($r['text'],"コロニー");
	$vpos3 = strpos($r['text'],"ゴイサギ");
	$vpos4 = strpos($r['text'],"twitpic");
	$vpos5 = strpos($r['text'],"塒");
	$vpos6 = strpos($r['text'],"ハクセキレイ");
	$vpos7 = strpos($r['text'],"コアジサシ");
	$nenhi = date("Y-m",$r['timestamp']);
	$hi = date("Y-m-d",$r['timestamp']);
	$hiji = date("Y-m-d H:i",$r['timestamp']);
	if ($nenhi == "2010-10" || $nenhi == "2010-11" || $nenhi == "2010-12"|| $nenhi == "2011-01") continue;
	if ($vpos6 > 0) continue;
	if ($vpos7 > 0) continue;

	if ($vpos1 > 1 || $vpos2 > 1 || $vpos3 > 0 || $vpos4 > 0 || $vpos5 > 0) {
	    if ($hi == "2010-05-21") print "<tr><td class=\"blue\">＜抱卵中？＞</td></tr>";
	    if ($hi == "2010-06-05") print "<tr><td class=\"blue\">＜コロニーは去年もあった＞</td></tr>";
	    if ($hi == "2010-06-11") print "<tr><td class=\"blue\">＜アマサギ確認＞</td></tr>";
	    if ($hi == "2010-06-12") print "<tr><td class=\"blue\">＜ヒナの鳴き声？＞</td></tr>";
	    if ($hiji == "2010-06-16 13:18") print "<tr><td class=\"blue\">＜ゴイサギのヒナ＞</td></tr>";
	    if ($hi == "2010-06-19") print "<tr><td class=\"blue\">＜写真＞</td></tr>";
	    if ($hi == "2010-06-21") print "<tr><td class=\"blue\">＜シラサギのヒナ＞</td></tr>";
	    if ($hi == "2010-06-26") print "<tr><td class=\"blue\">＜サギの卵＞</td></tr>";
	    if ($hiji == "2010-06-27 18:12") print "<tr><td class=\"blue\">＜羽ばたきの練習＞</td></tr>";
	    if ($hiji == "2010-07-10 20:43") print "<tr><td class=\"blue\">＜野田のサギ山記念館＞</td></tr>";
	    if ($hi == "2010-07-16") print "<tr><td class=\"blue\">＜大混雑＞</td></tr>";
	    if ($hi == "2010-07-19") print "<tr><td class=\"blue\">＜中川のコロニー＞</td></tr>";
	    if ($hiji == "2010-07-26 14:39") print "<tr><td class=\"blue\">＜ゴイサギがいなくなった!＞</td></tr>";
	    if ($hi == "2010-08-03") print "<tr><td class=\"blue\">＜コロニーは3年前から＞</td></tr>";
	    if ($hiji == "2010-08-19 20:57") print "<tr><td class=\"blue\">＜シラサギもいなくなった!＞></td></tr>";
	    if ($hiji == "2010-08-19 07:41") print "<tr><td class=\"blue\">＜深谷のコロニー＞</td></tr>";
	    if ($hiji == "2010-08-19 21:04") print "<tr><td class=\"blue\">＜サギの塒?＞</td></tr>";
	    if ($hiji == "2011-03-02 21:27") print "<tr><td class=\"blue\">＜さあ、2011年は＞</td></tr>";
	    if ($hi == "2011-04-03") print "<tr><td class=\"blue\">＜ブルドーザーが!＞</td></tr>";
	    if ($hi == "2011-05-02") print "<tr><td class=\"blue\">＜整地された理由＞</td></tr>";
	    $cmod = $num % 2;
	    if ($cmod == 1) {$cc="#e6e6fa";} 
	    else {$cc="#FFFFFF";} 
	    echo "<tr><td bgcolor=" . $cc . " align=left>" . htmlspecialchars($r['text']);
//	    echo date("Y-m-d H:i:s",$r['timestamp']);
	    echo "</td></tr>";
	    
	    $num ++;
	}
// echo date("Y-m-d H:i:s",$r['timestamp']);
    }
?>
</table>
</center>
</body>
</html>

