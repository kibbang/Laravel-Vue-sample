<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Repositories\IAuthRepository;

class AuthController extends Controller
{
    //
    private $user;
    public function __construct(IAuthRepository $user)
    {
        $this->user = $user;
    }

    public function registerUser(Request $request){
        $data = $request->all();
        $user = $this->user->registerUser($data);

        return response()->json(['user'=> $user]);
    }
}
