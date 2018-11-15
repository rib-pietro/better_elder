<?php

namespace better_elder\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use better_elder\ReceptionLocal;

class CustomerController extends Controller
{


    public function register(){

    	$receptions = DB::select('select * from reception_local');


    	return view('elder.register')->with([
    		'receptions'=> $receptions
    	]);
    }

    public function create(){



    }


}
