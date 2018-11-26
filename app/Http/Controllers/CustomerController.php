<?php

namespace better_elder\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use better_elder\Http\Requests\CustomerRequest;
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

    	$address = $request->only(['state', 'city', 'neighbourhood', 'street', 'complement']);

    	Address::create($address);

    	$id_address = DB::select('select last_insert_id();');

    	if(count($id_address) > 0){
    		$id_address = $id_address[0];
    	}

    	$customers = $request->only(['customer_name', 'age', 'cpf', 'document', 'sus_number', 'phone', 'birth_date', 'sex', 'ethnicity', 'mothers_name', 'civil_state']);
    	$customers['id_address'] = $id_address;
    	$customer = Customer::create($social_basics); 

    	$social_basics = $request->only(['alphabetized', 'scholarity', 'religion', 'occupation']);
    	$social_basics['id_customer'] = $customer->id_customer;
    	SocialBasics::create($social_basics);

    	$social_interests = $request->only(['go_to_centers', 'volunteer_work', 'fun_activies']);
    	$social_interests['id_customer'] = $customer->id_customer;
    	SocialInterests::create($social_interests);
		
    	$social_family = $request->only(['live_alone', 'live_with_family', 'live_with_partner', 'activity_together', 'company_attendance', 'basic_commerce_access', 'transport_access', 'currently_working', 'receives_pension', 'receives_benefit', 'receives_government_benefit']);
    	$social_family['id_customer'] = $customer->id_customer;
    	SocialFamily::create($social_family);
		
    	$health_basics = $request->only(['id_local', 'gravity_alergy', 'deficiency', 'blood_type', 'compared_health']);
    	$health_basics['id_customer'] = $customer->id_customer;
    	HealthBasics::create($health_basics);

    	$obstacles = $request->only(['curving', 'carry_objects', 'raise_arms', 'manage_delicate', 'long_walk', 'domestic_services', 'left_of_shopping', 'left_of_manage_money', 'left_of_walk_inside', 'left_of_domestic_services', 'left_of_bathing']);
    	$obstacles['id_customer'] = $customer->id_customer;
    	Obstacles::create($obstacles);
		
    	$physical_activities = $request->only(['practices_activity', 'would_start_activity']);
    	$physical_activities['id_customer'] = $customer->id_customer;
    	PhysicalActivities::create($physical_activities);
		
    	$feeding = $request->only(['feeds_three_times', 'fruits_vegetables', 'meet_fish_eggs', 'usual_sugar_feed', 'much_oil_fat_sugar_salt', 'drinks_water']);
    	$feeding['id_customer'] = $customer->id_customer;
    	Feeding::create($feeding);

    	$adictions = $request->only(['smokes_tobacco', 'wants_to_stop_smoking', 'is_former_smoker', 'drinks_alcohol', 'criticized_for_drinking', 'feel_guilty_for_drinking', 'usually_drinks', 'felt_like_cutting_alcohol']);
    	$adictions['id_customer'] = $customer->id_customer;
    	Adictions::create($adictions);
		
    	$fall_reports = $request->only(['date_of_fall', 'local_fall', 'caused_fracture']);
    	$fall_reports['id_customer'] = $customer->id_customer;
    	FallReports::create($fall_reports);

    	/*

    	DB::statement("call register_customers(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
    		$request->only(['smokes_tobacco']),
    		$request->only(['wants_to_stop_smoking']),       
    		$request->only(['is_former_smoker']),            
      		$request->only(['drinks_alcohol']),              
			$request->only(['criticized_for_drinking']),     
			$request->only(['feel_guilty_for_drinking']),    
			$request->only(['usually_drinks']),              
			$request->only(['felt_like_cutting_alcohol']),             
			$request->only(['customer_name']),               
			$request->only(['age']),                         
			$request->only(['cpf']),                         
			$request->only(['document']),                    
			$request->only(['sus_number']),                  
			$request->only(['phone']),                       
			$request->only(['birth_date date']),
			$request->only(['sex']),                         
			$request->only(['ethnicity']),                   
			$request->only(['mothers_name']),                
			$request->only(['civil_state']),              
			$request->only(['date_of_fall']),                
			$request->only(['local_fall']),                  
			$request->only(['caused_fracture']),                
			$request->only(['feeds_three_times']),           
			$request->only(['fruits_vegetables']),           
			$request->only(['meet_fish_eggs']),              
			$request->only(['usual_sugar_feed']),            
			$request->only(['much_oil_fat_sugar_salt']),     
			$request->only(['drinks_water']),                
			$request->only(['curving']),                     
			$request->only(['carry_objects']),               
			$request->only(['raise_arms']),                  
			$request->only(['manage_delicate']),             
			$request->only(['long_walk']),                   
			$request->only(['domestic_services']),           
			$request->only(['left_of_shopping']),            
			$request->only(['left_of_manage_money']),        
			$request->only(['left_of_walk_inside']),         
			$request->only(['left_of_domestic_services']),   
			$request->only(['left_of_bathing']),               
			$request->only(['practices_activity']),          
			$request->only(['would_start_activity']),                
			$request->only(['alphabetized']),                
			$request->only(['scholarity']),                  
			$request->only(['religion']),                    
			$request->only(['occupation']),                 
			$request->only(['live_alone']),                  
			$request->only(['live_with_family']),            
			$request->only(['live_with_partner']),           
			$request->only(['activity_together']),           
			$request->only(['company_attendance']),          
			$request->only(['basic_commerce_access']),       
			$request->only(['transport_access']),            
			$request->only(['currently_working']),           
			$request->only(['receives_pension']),            
			$request->only(['receives_benefit']),            
			$request->only(['receives_government_benefit']),               
			$request->only(['go_to_centers']),               
			$request->only(['volunteer_work']),              
			$request->only(['fun_activies']),
			$request->only(['id_local']), 
			$request->only(['gravity_alergy']), 
			$request->only(['deficiency']), 
			$request->only(['blood_type']),
			$request->only(['compared_health']),
			$id_address
    	]);*/

    	return redirect()->action('HomeController@index');

    }

}
