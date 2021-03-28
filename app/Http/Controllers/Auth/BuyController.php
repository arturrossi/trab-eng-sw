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

class BuyController extends Controller
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
        $test=Test::find($_REQUEST['id']);
        return view('auth.buyform')->with('test',$test);
    }

    public function check(Request $request)
    {
        $id_test = $request['id_test'];
        $test=Test::find($id_test);
        $data_agendamento = $request['dmy'];
        $hora_agendamento = $request['hour'];
        $datacompleta = $data_agendamento.' '.$hora_agendamento.':00';
        $schedules = DB::table('schedules')
            ->select('*')
            ->where(['schedule'=>$datacompleta])
            ->get();

        if(count($schedules))
        {
            return view('auth.buyform')->with('test',$test);
        }
        else
        {
            return view('auth.shoppingcartform')->with(['test'=>$test,'schedule'=>$datacompleta]);
        }
    }

    public function pay(Request $request)
    {
        $schedule = new Schedule();
        $schedule->id_user=$request['id_user'];
        $schedule->id_test=$request['id_test'];
        $schedule->schedule=$request['datacompleta'];
        $schedule->save();

        $tests = DB::table('tests')
            ->select('*')
            ->get();

        return view('auth.view')->with(array('tests'=>$tests));
    }
}

