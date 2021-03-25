<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Citizen;
use App\Models\Ward;
use App\Models\LGA;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corperDashboard(Request $request)
    {
        $citizens = Citizen::all();
        $wards = Ward::all();
        $lgas = LGA::all();
        $users = User::all();
        $states = State::all();

        return view('corpers', compact('citizens', 'wards', 'lgas', 'users', 'states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Logout a corp member
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register_citizen(Request $request)
    {
        $user = new Citizen;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->ward_id = $request->ward_id;
        $user->lga_id = $request->lga_id;
        $user->state_id = $request->state_id;
        if($user->save()){
            return redirect()->back()->with('success', 'Citizen created successfully');
        }else{
            return redirect()->back()->withErrors('citizen could not be created at this time.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function user_reports(Request $request)
    {
        $citizens = Citizen::simplePaginate(10);
        $wards = Ward::all();
        $lgas = LGA::all();
        $users = User::simplePaginate(10);
        $states = State::all();

        return view('users_reports', compact('citizens', 'wards', 'lgas', 'users', 'states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        //
    }
}
