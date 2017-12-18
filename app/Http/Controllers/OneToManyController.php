<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use App\State;

class OneToManyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oneToMany()
    {
        $country = Country::all()->first();
        
     
        
        $states =  $country->states()->get();
        
        
        foreach ($states as $state)
        {
            echo "<hr>{$state->initial}";
            
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oneToManyInverse()
    {
        $stateName = "R";
        
        $state = State::where('nome','Like',"%{$stateName}")->get()->first();
        
        echo 'state:___'.$state->nome;
        
        $country = $state->country()->get()->first();
        
        echo "<br>teste{$country->nome}";
    }

    /**
     * Terms middlare.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('terms/terms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accept()
    {
        dd(request()->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
