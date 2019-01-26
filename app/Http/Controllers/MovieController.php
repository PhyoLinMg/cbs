<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Movietype;
use App\Room;
use App\Booking;

class MovieController extends Controller
{

    public function __construct(){
        $this->middleware(['auth','role:admin']);
    }
    public function index()
    {
        //
        $movies=Movie::paginate(5);
        return view('admin.movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rooms=Room::get();
        $movietype=Movietype::get()->pluck('name','id');
        return view('admin.movie.create',compact('rooms','movietype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time=$request->hour.":".$request->minute." ".$request->amorpm;
        $movie=Movie::create([
            'name'=>$request->name,
            'room_id'=>$request->room,
            'time'=>$time,
            'descrption'=>$request->description,
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate
        ]);
        if (isset($request->avatar)) {
            $movie->addMediaFromRequest('avatar')->toMediaCollection();
        }

        $movie->types()->attach($request->types);
        $movie->save();
        return redirect('/movie');
    }

    public function showdetail($id){
        $movie=Movie::findOrFail($id);
        $bookings=Booking::where('movie_id',$id)->get();
        $times=Booking::select('movie_time')->distinct()->get();
        

        return view('admin.movie.moviedetail',compact('bookings','movie','times'));
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
        $rooms=Room::get();
        $movie=Movie::find($id);
        $movietype=Movietype::get()->pluck('name','id');
        return view('admin.movie.edit',compact('movie','rooms','movietype'));
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
        $movie=Movie::findOrFail($id);
        $movie->name=$request->name;
        $movie->descrption=$request->description;
        $movie->startdate=$request->startdate;
        $movie->enddate=$request->enddate;
        $movie->room_id=$request->room;
        $movie->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
