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

    	// $pages = Page::all();
    	// $carusels =
    	// $vantoins = 
    	// $documents =
    	// $contacts =
    	// $reviews =


    	return view('site.index');
    }


}
