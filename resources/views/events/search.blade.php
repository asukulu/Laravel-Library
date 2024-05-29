@extends('layouts.front')


@section('content')

@foreach ($events as $event)

<div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">
         {{ $event->title }}</strong>
        <h4 class="mb-0"> {{ $event->name }}</h4>
        <div class="mb-1 text-muted">Date: {{ $event->date}}  </div>
        <div class="mb-1 text-muted"> Time: {{ $event->time }} </div>
        <p class="card-text mb-auto"> Organiser: {{ $event->organiser }} </p>
        <strong class=" mb-auto"> Price: £{{ $event->getPrice() }}</strong>
        <a href="{{ route('events.show', $event->slug) }}" class="stretched-link btn btn-info">View more</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
        <img src="{{ $event->image }}" alt="">
      </div>
    </div>
  </div>


@endforeach

@endsection