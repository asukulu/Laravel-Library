@extends('layouts.front')

@section('content')
@if (Cart::count() > 0)
<div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Events</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Bookings </div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
           @foreach (Cart::content() as $event)

           <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{ $event->model->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle">{{ $event->model->title }} </a></h5><span class="text-muted font-weight-normal font-italic">Category</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{ $event->model->getPrice() }}</strong></td>
                  <td class="border-0 align-middle"><strong>1</strong></td>
                  <td class="border-0 align-middle">
                  
                  <form action="{{ route('booking.destroy' , $event->rowId) }}" method="POST">
                      @csrf
                      @method('DELETE')

                
                  <button type="submit" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
              <!--     <th scope="row">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                      </div>
                    </div>
                    <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="align-middle"><strong>1</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a> -->
                 
                    </form>
                    </td>
                </tr>

           @endforeach



              </tbody>
            </table>
          </div>
        
              <ul><a> <button href="{{ route('booking.index') }}"  class="btn btn- rounded-pill py-2 btn-block btn-success" id="submit">Book</button></a>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@else
<div class="col-md-12">
<p> You booking list is empty</P>

</div>
@endif

@endsection


