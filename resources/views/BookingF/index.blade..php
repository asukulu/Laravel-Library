@extends('layouts.front')

@section('extra-script')

<srcipt src="https://js.stripe.comm/v3/"></script>
@endsection


@section('content')
<div class="col-md-12">
    <h1> Booking Page</h1>
    <div class="row">
        <div class="col-md-6">
<form actionn="#">
    <div id="card-element">

    </div>


    <div id="card-errors" role="alert"></div>

<button class="btn btn-success" id="submit">Book</button>
</form>
        </div>
    </div>
</div>

@endsection

@section('extra-js')