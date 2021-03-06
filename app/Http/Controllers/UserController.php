<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UserCollection(User::all());
    }
    public function store(Request $request)
    {
        $user = new User([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => $request->get('password'),
        ]);
        $user->save();
        return response()->json('Successfully added');
    }
}
