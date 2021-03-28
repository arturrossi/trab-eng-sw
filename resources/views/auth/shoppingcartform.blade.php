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
                        <input type="hidden" name="id_test" value="{{($test->id)}}">
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        <input type="hidden" name="datacompleta" value="{{($schedule)}}">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i>
                                    Pagar R$ <?=str_replace('.',',',number_format($test->price,2))?>
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