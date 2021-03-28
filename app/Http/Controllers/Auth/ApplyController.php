<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Test;
use App\Schedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ApplyController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
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
        $datatoday = date('Y-m-d');
        $schedule = DB::table('schedules')
            ->where('schedule','like',$datatoday.'%')
            ->get();

        return view('auth.applyform')->with('schedules',$schedule);
    }

    public function done(Request $request)
    {
        $id_test=$_REQUEST['id'];
        $id_schedule=$_REQUEST['id_schedule'];
        $test=Test::find($id_test);
        $test->quantity-=1;
        $test->save();
        $schedule=Schedule::find($id_schedule);
        $schedule->delete();

        $datatoday = date('Y-m-d');
        $schedule = DB::table('schedules')
            ->where('schedule','like',$datatoday.'%')
            ->get();

        return view('auth.applyform')->with('schedules',$schedule);
    }
}
