<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Carousel;
use App\Contact;
use App\Document;
use App\Page;
use App\Review;
use App\Vacantion;


class IndexController extends Controller
{
    //

    public function execute(Request $request) {

    	$pages = Page::all();
    	// $carousels = Carousel::all();
    	$vacantoins = Vacantion::all();
    	// $documents =
    	// $contacts =
    	$reviews = Review::all();

		// dd($vacantoins);		

    	$menu = array();
    	foreach($pages as $page) {
    		$item = array('title'=>$page->name,'alias'=>$page->alias);
    		array_push($menu,$item);
    	}

    	// dd($menu);
    	// dd($pages);

    	$vac = array();
    	foreach($vacantoins as $vacantoin) {
    		$item = array('name'=>$vacantoin->name_vacancy,'place_work'=>$vacantoin->place_work,'experience'=>$vacantoin->experience,'rate_per_hour'=>$vacantoin->rate_per_hour,'accommodation'=>$vacantoin->accommodation,'language'=>$vacantoin->language,'age'=>$vacantoin->age,'images'=>$vacantoin->images);
    		array_push($vac,$item);
    	}
    	// dd($vac);

    	return view('site.index',array(
    								'menu'=>$menu,
    								// 'pages'=>$pages,
    								'vacantion'=>$vac,
    								'reviews'=>$reviews,
    								));
    }


}
