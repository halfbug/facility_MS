<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;
use App\Http\Requests;

class FacilityController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }//
    

/**
 * Create a new facility.
 *
 * @param  Request  $request
 * @return Response
 */
public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    //$request->user()->tasks()->create([
      //  'name' => $request->name,
    //]);
    
     Facility::create([
            'name'=>$request->name
        ]);

    return redirect('/facility');
}


/**
 * Display a list of all of the facility.
 *
 * @param  Request  $request
 * @return Response
 */
public function index(Request $request)
{
    $facilities = Facility::all();

    return view('facility.index', [
        'facilities' => $facilities,
    ]);
}
}
