<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Repositories\Frontend\Auth\UserRepository;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{

/**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * AccountController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.account');
    }

    public function generateOneTimeGamePass(Request $request)
    {
        $user = auth()->user();
        $newpass = generateOTP();
        $otp = $this->userRepository->updateUserOTP($newpass);

        if($otp) {
         return response()->json($newpass);   
        } else {
            return response()->json('Error generating and activating a One time Password for this account.');   
        }
        

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
