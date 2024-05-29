@extends('layouts.front')
@section('content')


<div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">{{ $event->title }}
          </strong>
          <h4 class="mb-0">{{ $event->name }}</h4>
          <hr>
        <!--   <div class="mb-1 text-muted">Date: {{ $event->created_at->format('d/m/y') }}</div> -->
          <p class="card-text mb-auto">description: {{ $event->description }}</p>

          <strong class=" mb-auto font-weight-nornal text-secondary">Price: £ {{ $event->getPrice() }}</strong>

<form method="POST" action="{{ route('booking.store') }}">
@csrf

<input type="hidden" name="id" value="{{ $event->id }}">
<input type="hidden" name="title" value="{{ $event->title }}">
<input type="hidden" name="price" value="{{ $event->price }}">
<button type="submit" class="btn btn-dark"> Add to booking list</button>
</form>      
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img src="{{ $event->image }}" alt="">
        </div>
      </div>
    </div>
    @endsection