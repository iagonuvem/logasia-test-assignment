<?php

namespace App\Http\Controllers;

use App\VehiclesPrice as VehiclesPrice;
use App\VehiclesAvailability as VehiclesAvailability;
use App\VehiclesType as VehiclesType;
use App\Vehicles as Vehicles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class VehiclesController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
    * @author Iago Nuvem
    * @since 11/2016
    * @return List of vehicles Types
    */
    public function getAllVehiclesTypes(Request $request){
    	$vehiclestype = VehiclesType::all();

    	return json_encode($vehiclestype);
    }

    /**
    * @author Iago Nuvem
    * @since 11/2016
    * @return List of vehicles
    */
    public function getAllVehicles(Request $request){
    	$vehicles = Vehicles::orderBy('vehicles_type_id')->get();

    	return json_encode($vehicles);
    }
    
    /**
    * @author Iago Nuvem
    * @since 11/2016
    * @return List of vehicles grouped by Type
    */
    public function getAllVehiclesByType(Request $request){
        $types = Vehicles::groupBy('vehicles_type_id')->select('vehicles_type_id as type_id')->get();
        
        $vehicles = []; 
        foreach ($types as $t) {
            $type = VehiclesType::where('id', '=' , $t->type_id)->select('description')->first();
            $count_type = Vehicles::where('vehicles_type_id','=',$t->type_id)->count();
            $data = [
                'id'    => $t->type_id,
                'type'  => $type->description,
                'count' => $count_type
            ];
            array_push($vehicles, $data);
        }

        return json_encode($vehicles);
    }

    public function getVehiclesByDay(Request $request){
    	$date = $request->date;

    	$vehicles = VehiclesAvailability::where('vehicles_availability.date' , '=' , $date)->leftJoin('vehicles_prices', 'vehicles_prices.vehicles_id', '=', 'vehicles_availability.vehicles_id')
    		->leftJoin('vehicles', 'vehicles_prices.vehicles_id', '=', 'vehicles.id')
    		->select('vehicles_availability.available as available', 'vehicles_prices.price as price', 'vehicles.*')
            ->get();

    	return json_encode($vehicles);
    }
}
