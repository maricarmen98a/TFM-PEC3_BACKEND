<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\Models\Flight;
use App\Models\Country;
use App\Models\Booking;
use App\Models\City;
use App\Http\Resources\FlightCollection;


class FlightController extends Controller {

    public function getFlight(){
        $flights = Flight::get();
        return response()->json($flights);
    }

    public function getCities(){
        $cities = City::get();
        return response()->json($cities);
    }

    public function getCountries(){
        $countries = Country::get();
        return response()->json($countries);
    }
    public function getBooking(){
        $bookings = Booking::get();
        return response()->json($bookings);
    }
     /**
     * Display a listing of the resource.
     * @param Flight $flight
     * @return FlightCollection
     */
    public function index(Flight $flight)
    {
        return  new FlightCollection($flight->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        $flight = DB::table('flights')
        ->orderBy('boarding_time', 'desc')
        ->get();
  
        return new FlightResource($flight);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = Flight::create($request->all());

        return new FlightResource($flight);
    }


    /**
     * @param Request $request
     * @param Flight $flight
     * @return FlightResource
     */
    public function update(Request $request, Flight $flight)
    {
        $flight->update($request->all());

        return new FlightResource($flight);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);

        if ($flight) {
            $flight->delete();
        }

        return response()->json(['data' => 'Resource has been deleted']);
    }
}