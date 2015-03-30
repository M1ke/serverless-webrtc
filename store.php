<?php
define('STORE',__DIR__.'/store/');

@mkdir(STORE);

$answer = $_GET['answer'] ? '-answer' : '';
$id_file = STORE.'id'.$answer;
$id = file_get_contents($id_file);
$store_file = STORE.'store-'.$id.$answer;
if (!empty($_GET['key'])){
	$id = (int)$id+1;
	file_put_contents($store_file, $_GET['key']);
	file_put_contents($id_file, $id);
}
else {
	$key = file_get_contents($file);
	echo $key;
}
die;
