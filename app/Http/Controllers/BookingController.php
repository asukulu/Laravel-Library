<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Booking;
use Illuminate\Support\Facades\DB;

use App\Models\Event;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

$duplicata = Cart::search(function ($cartItem, $rowId) use ($request){
    return $cartItem->id === $request->id;
});

if ($duplicata->isNotEmpty()){

    return redirect()->route('events.index')->with('success', ' The bookind has been already added');
}
$event = Event::find($request->event_id);

     // @param \Illuminate\Http\Request $request
 Cart::add($request->id, $request->title, 1, $request->price)
        ->associate('App\Models\Event');

        return redirect()->route('events.index')->with('success', 'The booking has been added');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success', 'The booking has been deleted');
    }
}