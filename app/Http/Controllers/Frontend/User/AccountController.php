<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.account');
    }

    public function generateOneTimeGamePass(Request $request)
    {

        $newpass = generateOTP();

        return response()->json($newpass);

/* 
        save new pass into game db
        return ajax response to the client saying that a 
        pass has been generated and activated

*/




      /*   if ($newpass) {
            return response()->json('Generation One Time Password:' . $newpass);
        } else {
            return response()->json('Error generating OTP for this account.');
        } */
    }
}
