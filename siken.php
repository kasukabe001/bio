<?php
//error_reporting(0);
		error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

$filename="abdefg.pdf";
$extension = strrchr($filename,".");
print $extension;
print "<br>";
//if (preg_match("/pdf/docx/gif/png/i", $extension)) {
// if (preg_match("/pdf/i", $extension)) {
if (preg_match("/(pdf|docx|gif|png)/i", $extension)){
   print "PDF dayo";
}
exit;


$v1="";
if (empty($v1)) {
  echo "OK 空です。";
} else {
  echo "NG 空ではありません。";
}
print "<br>";
if (empty($v1) == 1) {
  echo "OK 空です。";
} else {
  echo "NG 空ではありません。";
}

//$string_true  = 'true';
//print (bool)$string_true;

$string_false = 'false';
echo 'be false ? : ' . (bool)$string_false . PHP_EOL;
exit;


if (preg_match("/php/", "filename.php")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}

if (preg_match("/(pdf|docx|gif|png)/", "filename.gif")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}

if (preg_match("/pdf|docx|gif|png/", "filename.gif")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}

/*
if (preg_match("/^[0-9a-zA-Z]+$/", "全角文字")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}

if (preg_match("/^[0-9a-zA-Z]+$/", "Abc@_*123")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}

if (preg_match("/^[0-9a-zA-Z]+$/", "AbcXyz123")) {
  echo "OK マッチしました。";
} else {
  echo "NG マッチしませんでした。";
}
*/

print "<br>";
if (preg_match("/PHP/i", "主にphpでプログラムを作成しています。")) {
echo "OK マッチしました。";
} else {
echo "NG マッチしませんでした。";
}
print "<br>";

print "<br>";
if (preg_match("/PHP/", "主にphpでプログラムを作成しています。")) {
echo "OK マッチしました。";
} else {
echo "NG マッチしませんでした。";
}


/*
if (preg_match("/PHP/", "今PHPを使っています。",$data,PREG_OFFSET_CAPTURE)) {
echo "OK 文中で使用されています。";
} else {
echo "NG 文中で使用されていません。";
}
print_r($data);
*/

//phpinfo();
?>