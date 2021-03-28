<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Test;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RecordController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'manufacturer' => ['required', 'string', 'max:255'],
            'due' => ['required', 'date'],
            'test_result_time' => ['required', 'integer'],
        ]);
    }
    
    /**
     * Create a new test instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Test
     */
    public function create(Request $request)
    {
        $test = new Test();
        $test->name= $request['name'];
        $test->manufacturer= $request['manufacturer'];
        $test->due= $request['due'];
        $test->test_result_time= $request['test_result_time'];
        $test->price= str_replace(',','.',$request['price']);
        $test->quantity= $request['quantity'];
        $test->requirements= $request['requirements'];
        $test->save();
        
        return Redirect::route('view');
    }

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
        return view('auth.form');
    }
}
