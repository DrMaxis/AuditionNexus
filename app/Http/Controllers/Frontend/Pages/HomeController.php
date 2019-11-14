<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

        
public function landing() {
    return view('frontend.landing');
}


}
