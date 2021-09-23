<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewuser(){
        // $this->authorize('Admin');
        // $users = User::with(['roles', 'countries','states', 'cities'])->get();
        // dd($users);
        // $roles = Role::all();
        // $countries = Country::all();
        // $states = State::all();
        // $cities = City::all();
        return view('viewuser');
    }
}
