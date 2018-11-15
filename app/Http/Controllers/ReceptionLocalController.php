<?php

namespace better_elder\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use better_elder\Http\Requests\ReceptionLocalRequest;
use better_elder\Specialist;
use better_elder\Activity;
use better_elder\AvailableExam;
use better_elder\ReceptionLocal;
use better_elder\City;

class ReceptionLocalController extends Controller
{
    public function new(){
    	$specialists = Specialist::all();
    	$activities = Activity::all();
    	$exams = AvailableExam::all();
    	return view('reception_local.create')->with([
    		'specialists' => $specialists,
    		'activities' => $activities,
    		'exams' => $exams
    	]);
    }

    public function create(ReceptionLocalRequest $request){

    	$data = $request->except(['specialists', 'exams', 'activities', 'city_name']);

    	$city = City::firstOrCreate(['city_name' => str_replace("-", " ", $request->input['city_name'])]);
    	
    	$specialists = $request->input['specialists'];
    	$activities = $request->input['activities'] ;
    	$exams = $request->input['exams'];    	

    	$data['id_city'] = $city->id_city;
    	$reception = ReceptionLocal::firstOrCreate($data);

    	$this->foreignKeys($specialists, Specialist::class, 'local_specialists', 'specialist', $reception);
    	$this->foreignKeys($activities, Activity::class, 'local_activities', 'activity', $reception);
    	$this->foreignKeys($exams, AvailableExam::class, 'local_exams', 'exam', $reception);

    	return view('index');

    }

    private function foreignKeys($string_array, $class, $table, $name, $obj_reception){

    	$array = explode(",", $string_array);

    	for($i = 0; $i < count($array); $i++){
    		$model = $class::firstOrCreate([$name.'_name' => $array[$i]]);
    		DB::insert('insert into '. $table .'(id_local, id_'. $name .') values(?, ?)', [$obj_reception->id_local, $model['id_'.$name]]);
    	}

    }

    public function read(){

    	$receptions = DB::select('select r.local_name, c.city_name, r.neighbourhood, r.state from reception_local r inner join city c on(r.id_city = c.id_city)');
/*
    	var_dump($receptions);
    	exit;
*/
    	$cities = [];
    	$states = [];

    	foreach ($receptions as $r) {
    		if(!in_array($r->city_name, $cities))
    			array_push($cities, $r->city_name);
    		if(!in_array($r->state, $states))
    			array_push($states, $r->state);
    	}

    	return view('reception_local.read')->with([
    		'receptions' => $receptions,
    		'cities' => $cities,
    		'states' => $states,
    	]);

    }
}
