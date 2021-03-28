@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="fa fa-address-book fa-2x"></i><a href="{{ route('view') }}"> Consultar Testes</a><br>
                    @if ((Auth::user()->user_type !='pacient'))
                        <i class="fa fa-plus-square fa-2x"></i><a href="{{ route('record') }}"><i></i> Cadastrar Testes</a><br>
                    @endif
                    <i class="fa fa-clock fa-2x"></i><a href="#"><i></i> Agendar Aplicação</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection