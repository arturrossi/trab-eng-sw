<?php
use App\Test;
use App\User;
?>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Aplicações do dia <?=date('d/m/Y')?></div>
                <div class="card-body">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Horário</th>
                                <th>Teste</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <?php
                                $test=DB::table('tests')->where('id',"=",$schedule->id_test)->first();
                                $pacient=User::find($schedule->id_user);
                                $date= new DateTime($schedule->schedule);
                            ?>
                            <tr>
                                <td>{{$pacient->name}}</td>
                                <td><?=date_format($date,"H:i")?></td>
                                <td>{{$test->name}}</td>
                                <td><a href="{{ route('apply.done',['id'=>$test->id,'id_schedule'=>$schedule->id]) }}"><i class="fa fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection