<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class SearchController extends Controller
{
    //
    public function search(Request $request){
    	$s = $request->search;
		$movies = Movie::all();

		$m = Movie::where('name','LIKE','%'.$s.'%' )->get();


		return view ('admin.movie.searched',compact('m','movies'));
    }
}
