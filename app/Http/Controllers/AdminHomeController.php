<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Movie;
use App\Sold;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','role:admin']);
    }
    public function index()
    {
        $movies=Movie::get();
        return view('admin.index',compact('movies'));
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
        //
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
    public function destroy($id)
    {
        //
    }
    //another added methods are below 
    public function reservationindex(){
        $bookings=Booking::get();
        return view('admin.reservation.index',compact('bookings'));
    }
    public function confirm($id){
        $booking=Booking::findOrFail($id);
        Sold::create([
            'name'=>$booking->name,
            'phno'=>$booking->phno,
            'mid'=>$booking->mid,
            'seats'=>$booking->seats
        ]);
        return redirect('/admin/reserve');
    }
    public function bookingdelete($id){
        $booking=Booking::find($id);
        $booking->delete();
        return redirect('/admin/reserve');


    }

}
