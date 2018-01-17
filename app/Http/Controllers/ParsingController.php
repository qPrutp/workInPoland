<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use phpQuery;
use App\Vacantion;
use DB;

class ParsingController extends Controller
{
    //
    public function execute() {

	// Parser
    	$site = 'https://workinpoland.com.ua';
		$html = $site.'/vacancy/';
		$file = file_get_contents($html);
		

		$doc = phpQuery::newDocument($file);

		$arrayParses = array();


		foreach ($doc->find('.list_vacans li') as $k=>$item) {

			$item = pq($item);
			$itemImgUrl = $item->find('.x-img')->attr('style');
			preg_match("/[\/]+[^)]+/", $itemImgUrl, $matches);

			$itemArray = array(
				'name' => $item->find('.x-name')->text(),
				'imgUrl' => $site.$matches[0],
				'age' => $item->find('.x-props-block:eq(0) div:eq(2) span:eq(1)')->text(),
				'working'=> $item->find('.x-props-block:eq(0) div:eq(3) span:eq(1)')->text(),
				'language' => $item->find('.x-props-block:eq(1) div:eq(0) span:eq(1)')->text(),
				'experience' => $item->find('.x-props-block:eq(1) div:eq(1) span:eq(1)')->text(),
				'pay' => $item->find('.x-props-block:eq(1) div:eq(2) span:eq(1)')->text()
			);
			array_push($arrayParses, $itemArray);
		}

		phpQuery::unloadDocuments();
		// /Parser

		return view('site.parsing', array(
									'parsItems'=>$arrayParses,
									));
	}
}
