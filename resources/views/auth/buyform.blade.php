@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ ("Agendar $test->name") }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('buy.check') }}">
                        @csrf
                        <input type="hidden" name="id_test" value="{{($test->id)}}">
                        <div class="form-group row">
                            <label for="dmy" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-4">
                                <input id="dmy" type="date" class="form-control" name="dmy" min="<?=date('Y-m-d', strtotime(" +1 days"))?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hour" class="col-md-4 col-form-label text-md-right">{{ __('Horário') }}</label>

                            <div class="col-md-4">
                                <input id="hour" type="time" class="form-control" name="hour" min="09:00" max="18:00" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-clock"></i>
                                    {{ __('Agendar') }}
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