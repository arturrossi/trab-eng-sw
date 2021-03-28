@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar teste') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('record.create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="manufacturer" class="col-md-4 col-form-label text-md-right">{{ __('Fabricante') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturer" type="text" class="form-control" name="manufacturer" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="due" class="col-md-4 col-form-label text-md-right">{{ __('Vencimento') }}</label>

                            <div class="col-md-6">
                                <input id="due" type="date" class="form-control" name="due" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="test_result_time" class="col-md-4 col-form-label text-md-right">{{ __('Resultado em') }}</label>
                            <div class="col-md-2">
                                <input min=5 step=5 placeholder="minutos" id="test_result_time" type="number" class="form-control" name="test_result_time" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>
                            <div class="col-md-2">
                                <input id="price" type="text" class="form-control" name="price" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantidade') }}</label>
                            <div class="col-md-2">
                                <input min=1 step=1 id="quantity" type="number" class="form-control" name="quantity" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="requirements" class="col-md-4 col-form-label text-md-right">{{ __('Requisitos') }}</label>
                            <div class="col-md-8">
                                <textarea class="form-control no-resize" rows="5" name="requirements" id="requirements"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function($){
        $("#price").mask("000,00", {reverse: true});
    });
</script>