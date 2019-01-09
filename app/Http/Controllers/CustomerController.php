<?php

namespace better_elder\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use better_elder\Http\Requests\CustomerRequest;
use better_elder\Customer;
use better_elder\ReceptionLocal;
use better_elder\Address;
use better_elder\SocialBasics;
use better_elder\SocialInterests;
use better_elder\SocialFamily;
use better_elder\HealthBasics;
use better_elder\Obstacles;
use better_elder\PhysicalActivities;
use better_elder\Feeding;
use better_elder\Adictions;
use better_elder\LinkedPeople;
use better_elder\FallReports;

class CustomerController extends Controller
{


    public function register(){

    	$receptions = DB::select('select * from reception_local');


    	return view('elder.register')->with([
    		'receptions'=> $receptions
    	]);
    }

    public function create(CustomerRequest $request){

    	$info_address = (array)$request->only(['state', 'city', 'neighbourhood', 'street', 'complement', 'number']);
    	$address = Address::create($info_address);
    	$id_address = DB::getPdo()->lastInsertId();

    	$customers = (array)$request->only(['customer_name', 'age', 'cpf', 'document', 'sus_number', 'phone', 'birth_date', 'sex', 'ethnicity', 'mothers_name', 'civil_state']);
    	$customers['id_address'] = $id_address;
    	$customer = Customer::create($customers);

    	$id_customer = DB::getPdo()->lastInsertId();

    	$social_basics = (array)$request->only(['alphabetized', 'scholarity', 'religion', 'occupation']);
    	$social_basics['id_customer'] = $id_customer;
    	SocialBasics::create($social_basics);

    	$social_interests = (array)$request->only(['go_to_centers', 'volunteer_work', 'fun_activities']);
    	$social_interests['id_customer'] = $id_customer;
    	SocialInterests::create($social_interests);
		
    	$social_family = (array)$request->only(['live_alone', 'live_with_family', 'live_with_partner', 'activity_together', 'company_attendance', 'basic_commerce_access', 'transport_access', 'currently_working', 'receives_pension', 'receives_benefit', 'receives_government_benefit']);
    	$social_family['id_customer'] = $id_customer;
    	SocialFamily::create($social_family);
		
    	$health_basics = (array)$request->only(['id_local', 'gravity_alergy', 'deficiency', 'blood_type', 'compared_health']);
    	$health_basics['id_customer'] = $id_customer;
    	HealthBasics::create($health_basics);

    	$obstacles = (array)$request->only(['curving', 'carry_objects', 'raise_arms', 'manage_delicate', 'long_walk', 'domestic_services', 'left_of_shopping', 'left_of_manage_money', 'left_of_walk_inside', 'left_of_domestic_services', 'left_of_bathing']);
    	$obstacles['id_customer'] = $id_customer;
    	Obstacles::create($obstacles);
		
    	$physical_activities = (array)$request->only(['practices_activity', 'would_start_activity']);
    	$physical_activities['id_customer'] = $id_customer;
    	PhysicalActivities::create($physical_activities);
		
    	$feeding = (array)$request->only(['feeds_three_times', 'fruits_vegetables', 'meet_fish_eggs', 'usual_sugar_feed', 'much_oil_fat_sugar_salt', 'drinks_water']);
    	$feeding['id_customer'] = $id_customer;
    	Feeding::create($feeding);

    	$adictions = (array)$request->only(['smokes_tobacco', 'wants_to_stop_smoking', 'is_former_smoker', 'drinks_alcohol', 'criticized_for_drinking', 'feel_guilty_for_drinking', 'usually_drinks', 'felt_like_cutting_alcohol']);
    	$adictions['id_customer'] = $id_customer;
    	Adictions::create($adictions);
		
    	$fall_reports = (array)$request->only(['date_of_fall', 'local_fall', 'caused_fracture']);
    	$fall_reports['id_customer'] = $id_customer;
    	FallReports::create($fall_reports);

    	return redirect()->action('HomeController@index');

    }

}
