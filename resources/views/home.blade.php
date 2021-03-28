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
                    @if ((Auth::user()->user_type !='pacient'))
                        <i class="fa fa-address-book fa-2x"></i><a href="{{ route('view') }}"> Consultar Testes Disponíveis</a><br>
                    @else
                        <i class="fa fa-address-book fa-2x"></i><a href="{{ route('view') }}"> Consultar/Comprar Testes</a><br>
                    @endif
                    @if ((Auth::user()->user_type =='manager'))
                        <i class="fa fa-plus-square fa-2x"></i><a href="{{ route('record') }}"><i></i> Solicitar Testes</a><br>
                    @endif
                    @if ((Auth::user()->user_type =='nurse'))
                        <i class="fa fa-folder-open fa-2x"></i><a href="#"><i></i> Registrar aplicação</a><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection