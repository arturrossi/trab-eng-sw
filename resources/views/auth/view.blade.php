@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Testes disponíveis') }}</div>
                <div class="card-body">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Fabricante</th>
                                @if (Auth::user()->user_type=='pacient')
                                    <th>Indicação</th>
                                    <th>Resultado em</th>
                                    <th>Preço(R$)</th>
                                    <th>Ações</th>
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
                                    <td style="text-align: left;">{{$test->requirements}}</td>
                                    <?php
                                        if($test->test_result_time>=60)
                                        {
                                            $t=$test->test_result_time/60;
                                            $tempo=$t." horas";
                                        }
                                        else
                                            $tempo=$test->test_result_time." minutos";
                                    ?>
                                    <td><?=$tempo?></td>
                                    <td><?=str_replace('.',',',$test->price)?></td>
                                    <td><a href="{{ route('buy',['id'=>$test->id]) }}"><i class="fa fa-cart-plus"></i></a></td>
                                @else
                                    <td>{{$test->quantity}}</td>
                                    <td><?=date('d/m/Y',strtotime($test->due))?></td>
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