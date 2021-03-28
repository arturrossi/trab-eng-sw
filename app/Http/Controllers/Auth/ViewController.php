<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Test;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Show the record of tests form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tests = DB::table('tests')
            ->select('*')
            ->get();

        return view('auth.view')->with(array('tests'=>$tests));
    }
}
