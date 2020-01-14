<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;

/**
 * Class PageController.
 */
class PageController extends Controller
{
   
public function downloads() {


    return view('frontend.downloads');
}

}
