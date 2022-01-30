<?php

namespace Skillshare\AuthPackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthUserController extends Controller
{
    public function index()
    {
        return view('authPackage::index');
    }

    public function register(Request $request)
    {
        dd($request->all());
    }
}
