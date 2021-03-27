<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Test;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'manufacturer' => $data['manufacturer'],
            'due' => $data['due'],
            'test_result_time' => $data['test_result_time'],
        ]);
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
        $tests = DB::table('tests')
            ->select('*')
            ->get();

        return view('auth.form')->with(array('tests'=>$tests));
    }
}
