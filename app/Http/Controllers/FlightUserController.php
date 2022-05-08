<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlightUserCollection;
use App\Http\Resources\FlightUserResource;
use App\Models\Flight;
use App\Models\FlightUser;
use Illuminate\Http\Request;

class FlightUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param FlightUser $reservation
     * @return array
     */
    public function index(FlightUser $flightuser)
    {
        return new FlightUserCollection($flightuser->all());
    }

    public function show(FlightUser $flightuser)
    {
        return new FlightUserResource($flightuser);
    }

    public function store(Request $request)
    {
        $flightuser = FlightUser::create($request->all());

        return new FlightUserResource($flightuser);
    }

    public function update(FlightUser $flightuser, Request $request)
    {
        $flightuser->update($request->all());

        return new FlightUserResource($flightuser);
    }

    public function destroy(FlightUser $flightuser)
    {
        if ($flightuser->first()) {
            $flightuser->delete();
        }

        return response()->json(['data' => 'Resource has been deleted']);
    }
}
