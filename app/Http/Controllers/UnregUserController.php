<?php

namespace App\Http\Controllers;

use App\Http\Resources\UnregUserCollection;
use App\Http\Resources\UnregUserResource;
use App\Models\Flight;
use App\UnregUser;
use Illuminate\Http\Request;

class UnregUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param unregUser $reservation
     * @return array
     */
    public function index(UnregUser $unregUser)
    {
        return new UnregUserCollection($unregUser->all());
    }

    public function show(UnregUser $unregUser)
    {
        return new UnregUserResource($unregUser);
    }

    public function store(Request $request)
    {
        $unreguser = new UnregUser([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
        ]);
        $unreguser->save();
        return response()->json('Successfully added');
    }

    public function update(UnregUser $unregUser, Request $request)
    {
        $unregUser->update($request->all());

        return new UnregUserResource($unregUser);
    }

    public function destroy(UnregUser $unregUser)
    {
        if ($unregUser->first()) {
            $unregUser->delete();
        }

        return response()->json(['data' => 'Resource has been deleted']);
    }
}
