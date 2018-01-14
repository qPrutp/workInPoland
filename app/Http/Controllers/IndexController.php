<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

    	$pages = Page::all();
    	$carousels = Carousel::all();
    	$vacantoins = Vacantion::all();
    	// $documents =
    	// $contacts =
    	$reviews = Review::all();

		// dd($carousels);		

    	$menu = array();
    	foreach($pages as $page) {
    		$item = array('title'=>$page->name,'alias'=>$page->alias);
    		array_push($menu,$item);
    	}

    	// dd($menu);
    	// dd($pages);

    	// return view('site.index',array(
    	// 							'menu'=>$menu,
    	// 							'carousels'=>$carousels,
    	// 							// 'pages'=>$pages,
    	// 							'vacantion'=>$vacantoins,
    	// 							'reviews'=>$reviews,
    	// 							));

    	return view('site.index2');
    }

}