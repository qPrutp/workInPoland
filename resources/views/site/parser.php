<hr/>
parser.php
<hr/>


<?php

require 'phpQuery_onefile.php';


$html = 'https://workinpoland.com.ua/vacancy/';
$file = file_get_contents($html);
$site = 'https://workinpoland.com.ua';


$doc = phpQuery::newDocument($file);

// /^url(.+)$/ regularka

$arrayParses = array();

// foreach ($doc->find('.list_vacans li > .x-img') as $k=>$item) {

// 	$item = pq($item)->attr('style');
// 	preg_match("/[\/]+[^)]+/", $item, $matches);
//     echo "<br>" . $site . $matches[0];



// }
foreach ($doc->find('.list_vacans li') as $k=>$item) {

	$item = pq($item);
	$itemImgUrl = $item->find('.x-img')->attr('style');
	preg_match("/[\/]+[^)]+/", $itemImgUrl, $matches);

	$itemArray = array(
		'name'=>$item->find('.x-name'),
		'imgUrl'=>$site.$matches[0]
	);
	array_push($itemArray, $arrayParses);
}

return view('site.index', array(
	'parrser'=>$arrayParses
))
phpQuery::unloadDocuments();

// var_dump($arrayParses);

?>