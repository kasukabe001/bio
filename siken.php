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
  echo "OK ���Ǥ���";
} else {
  echo "NG ���ǤϤ���ޤ���";
}
print "<br>";
if (empty($v1) == 1) {
  echo "OK ���Ǥ���";
} else {
  echo "NG ���ǤϤ���ޤ���";
}

//$string_true  = 'true';
//print (bool)$string_true;

$string_false = 'false';
echo 'be false ? : ' . (bool)$string_false . PHP_EOL;
exit;


if (preg_match("/php/", "filename.php")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}

if (preg_match("/(pdf|docx|gif|png)/", "filename.gif")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}

if (preg_match("/pdf|docx|gif|png/", "filename.gif")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}

/*
if (preg_match("/^[0-9a-zA-Z]+$/", "����ʸ��")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}

if (preg_match("/^[0-9a-zA-Z]+$/", "Abc@_*123")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}

if (preg_match("/^[0-9a-zA-Z]+$/", "AbcXyz123")) {
  echo "OK �ޥå����ޤ�����";
} else {
  echo "NG �ޥå����ޤ���Ǥ�����";
}
*/

print "<br>";
if (preg_match("/PHP/i", "���php�ǥץ�����������Ƥ��ޤ���")) {
echo "OK �ޥå����ޤ�����";
} else {
echo "NG �ޥå����ޤ���Ǥ�����";
}
print "<br>";

print "<br>";
if (preg_match("/PHP/", "���php�ǥץ�����������Ƥ��ޤ���")) {
echo "OK �ޥå����ޤ�����";
} else {
echo "NG �ޥå����ޤ���Ǥ�����";
}


/*
if (preg_match("/PHP/", "��PHP��ȤäƤ��ޤ���",$data,PREG_OFFSET_CAPTURE)) {
echo "OK ʸ��ǻ��Ѥ���Ƥ��ޤ���";
} else {
echo "NG ʸ��ǻ��Ѥ���Ƥ��ޤ���";
}
print_r($data);
*/

//phpinfo();
?>