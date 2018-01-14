<?php

require 'phpQuery_onefile.php';

function print_arr($arr) {
	echo '<pre>'. print_arr($arr,true) .'</pre>';
}

$url = 'https://workinpoland.com.ua/vacancy/';
$file = file_get_contents($url);

// echo htmlspecialchars($file);

// $pattern = '#<li class="x-line.+?</li>#s';

// preg_match($pattern, $file, $matches);

// print_r($matches);

$doc = phpQuery::newDocument($file);
// $tbl = $doc->find('.x-line');
// $tr = $doc->find('.x-line div:eq(2)')->text();
// echo $tr;

// foreach ($doc->find('.x-name') as $item) {
	// print_arr($item);
	// $doc = pq($doc);
	// $doc->find('.x-ID')->remove();
	echo $doc->find('.url');
// }



?>ho