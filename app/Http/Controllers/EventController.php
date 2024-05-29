<?php
namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Event;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        {
            if (request()->categorie)
            dd('ok categroy');
        
            $events = Event::take(10)->get();

            return view('events.index')->with('events', $events);
        }
    
        public function show($slug)
        {
           //
      
            $event = Event::where('slug', $slug)->firstOrFail();
    
            return view('events.show')->with('event', $event);
    
        }

        public function search()
{
        ($s = request()->input('s'));
      

        $events = Event::where('name', 'like', "%$s%")
                ->orWhere('title', 'like', "%$s%")
                ->orWhere('organiser', 'like', "%$s%")
                ->paginate(6);
                

                return view('events.search')->with('events', $events)
        
                ;


    }
   
    }

    