@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ ("Comprar $test->name") }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('buy.pay') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="dmy" class="col-md-4 col-form-label text-md-right">{{ __('Pagamento') }}</label>

                            <div class="col-md-4">
                                <input id="dmy" type="text" class="form-control" name="dmy" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i>
                                    {{ __('Pagar') }}
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
{{-- <script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function($){
         
    });
</script> --}}