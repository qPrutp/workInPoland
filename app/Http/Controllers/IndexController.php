<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use phpQuery;

use App\Carousel;
use App\Contact;
use App\Document;
use App\Page;
use App\Review;
use App\Vacantion;

use Mail;
use DB;


class IndexController extends Controller
{
    //


    public function execute(Request $request) {

    	// if($request->isMethod('post')) {

    	// 	$messages = [
    	// 		'required' => 'Field :attribute is not filled',
    	// 		'email' => 'Field :attribute must match the email format'
    	// 	];

    	// 	$this->validate($request,[
    	// 		'name' => 'required|max:255',
    	// 		'email' => 'required|email',
    	// 		'text' => 'required'
    	// 	], $messages);

    	// 	// dump($request);
    	// 	$data = $request->all();

    	// 	$result = Mail::send('site.email',['data'=>$data],function($message) use ($data) {
    	// 		$mail_admin = env('MAIL_ADMIN');
    	// 		$message->from($data['email'],$data['name']);
    	// 		$message->to($mail_admin)->subject('Question');
    	// 	});

    	// 	if($result) {
    	// 		return redirect()->route('home')->with('status','Email is send');
    	// 	}

    	// }

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
				'age' => $item->find('.x-AGE')->text(),
				'pay' => $item->fin('.x-pay')->text(),
				'working'=> $item->fin('.x-WORKING')->text()
			);
			array_push($arrayParses, $itemArray);
		}

		phpQuery::unloadDocuments();
		// /Parser

    	$pages = Page::all();
    	$carousels = Carousel::all();
    	$vacantoins = Vacantion::all();
    	// $documents =
    	// $contacts
    	$reviews = Review::all();

		// dd($carousels);		

    	$menu = array();
    	foreach($pages as $page) {
    		$item = array('title'=>$page->name,'alias'=>$page->alias);
    		array_push($menu,$item);
    	}

    	// dd($menu);
    	// dd($pages);

    	return view('site.index',array(
    								'menu'=>$menu,
    								'carousels'=>$carousels,
    								// 'pages'=>$pages,
    								'vacantion'=>$vacantoins,
    								'reviews'=>$reviews,
    								'parsItems'=>$arrayParses,
    								));

    	// return view('site.parser');
    }

}