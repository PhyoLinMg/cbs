<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Movie;
use App\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function savebooking(Request $req){
        $seats=$req->seats;
       // $group=\DB::table('bookings')->select('group')->latest()->first();
        Booking::create([
            'name'=>$req->name,
             'phno'=>$req->phno,
           'seats'=>$seats,
           'mid'=>$req->mid
        ]);

        // \DB::table('bookingtest')->insert([
        //     
        // ]);
        
        
    }
    public function index()
    {
        return view('home');
    }
    public function booking(){

        $date=date("Y-m-d");

        $movies=Movie::whereDate('enddate', '>=', date('Y-m-d'))
        ->get();

        return view('all.booking1',compact('movies'));
    }

    public function theatre(){

        // $date=date("Y-m-d");

        // $movies=Movie::whereDate('enddate', '>=', date('Y-m-d'))
        // ->get();

     return view('all.booking');
 }



 public function pdfdownload(){
     $pdf = PDF::loadView('pdf');
     return $pdf->download('test.pdf');
 }
 public function layout(){

 }

}
