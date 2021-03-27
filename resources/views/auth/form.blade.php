@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Teste disponíveis') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Fabricante</th>
                                @if (Auth::user()->user_type=='pacient')
                                <th>Indicação</th>
                                <th>Resultado em</th>
                                <th>Preço</th>
                                @else
                                    <th>Quantidade</th>
                                    <th>Vencimento</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $test)
                            <tr>
                                <td>{{$test->name}}</td>
                                <td>{{$test->manufacturer}}</td>
                                @if (Auth::user()->user_type =='pacient')
                                    <td>{{$test->requirements}}</td>
                                    <td>{{$test->test_result_time}}</td>
                                    <td>{{$test->price}}</td>
                                @else
                                    <td>{{$test->quantity}}</td>
                                    <td>{{$test->due}}</td>
                                @endif
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