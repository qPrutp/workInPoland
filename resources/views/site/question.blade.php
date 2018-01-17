<hr/>
parser.php
<hr/>


<?php

require 'phpQuery_onefile.php';

function print_arr($arr) {
	echo '<pre>'. print_arr($arr,true) .'</pre>';
}


function Parse ($p1, $p2, $p3) {
	$num1 = strpos($p1, $p2);
	if($num1 === false) return 0;
	$num2 = substr($p1, $num1);
	return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}

$html = 'https://workinpoland.com.ua/vacancy/';
$file = file_get_contents($html);
$site = 'https://workinpoland.com.ua';

// echo htmlspecialchars($file);

// $pattern = '#<li class="x-line.+?</li>#s';

// preg_match($pattern, $file, $matches);

// print_r($matches);

// echo Parse($file, '<div class="mail mail-cahnge">','</div>').'<br>';

$doc = phpQuery::newDocument($file);
// $tbl = $doc->find('.x-line');
// $tr = $doc->find('.x-line div:eq(2)')->text();
// echo $tr;

// /^url(.+)$/ regularka

foreach ($doc->find('.list_vacans li > .x-img') as $item) {

	$item = pq($item)->attr('style');
	// preg_match("~\/[^)]+~", $item, $item);
	// echo $item;
	preg_match("/[\/]+[^)]+/", $item, $matches);
    echo "<br>" . $site . $matches[0];

	// var_dump($item);
	// print_r($item);
	// $doc = pq($doc);
	// $doc->find('.x-ID')->remove();
	// echo $doc->find('.x-line');
	// echo '<br/>';

}

phpQuery::unloadDocuments();



?>

<hr/>
end parser.php
<hr/>




										<tr>
											<td>zl/год</td>
											<td>{{ $item['pay'] }}</td>
										</tr>
										<tr>
											<td>місце роботи</td>
											<td>{{ $item['working'] }}</td>
										</tr>


<!-- <table width="100%">
										<tr>
											<td>zl/год</td>
											<td>{{ $item->rate_per_hour }}</td>
										</tr>
										<tr>
											<td>місце роботи</td>
											<td>{{ $item->place_work }}</td>
										</tr>
										<tr>
											<td>проживання</td>
											<td>{{ $item->accommodation }}</td>
										</tr>
										<tr>
											<td>досвід роботи</td>
											<td>{{ $item->experience }}</td>
										</tr>
										<tr>
											<td>вік</td>
											<td>{{ $item->age }}</td>
										</tr>
										<tr>
											<td>знання мови</td>
											<td>{{ $item->language }}</td>
										</tr>
									</table> -->