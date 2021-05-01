@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Usuários cadastrados') }}</div>
                <div class="card-body">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $usuario)
                            <tr>
                                <td>{{ucwords($usuario->name)}}</td>
                                <td>{{$usuario->email}}</td>
                                <?php if($usuario->user_type=="nurse"): ?>
                                <td>{{"Enfermeiro(a)"}}</td>
                                <?php elseif($usuario->user_type=="pacient"): ?>
                                <td>{{"Paciente"}}</td>
                                <?php else: ?>
                                <td>{{"Gerente"}}</td>
                                <?php endif; ?>
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