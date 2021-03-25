<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::latest() -> simplePaginate(5);
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        /*
        +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | text            | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+
         */
        
    
        request()->validate(Location::$rules);

        Location::create($request -> all());
        // $location = new Location;
        // $location -> name = $request['name'];
        // $location -> descriptions = $request['descriptions'];
        // $location -> save();
        
        return redirect() -> route('locations.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
       #update Location
       $location -> update($request -> all());
       return redirect() -> route('locations.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
