<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use App\Location;

class OneToOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OneToOne()
    {
        
        //return redirect()->action('OneToOneController@OneToOneInverse');
        $country = Country::where('nome','Brasil')->get()->first();
        
        
       echo $country->location->latitude;
       echo "<br>".$country->location()->get()->first();
        
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OneToOneInverse()
    {
        $latitude = 123;
        $longitude = 312;
        
        $location = Location::where('latitude',$latitude)->
                where('longitude',$longitude)->
                get()->
                first();
        
        
        $dados = $location->country;
        
        echo $dados->nome;
        
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function OneToOneInsert()
    {
        $dataForm =  [
            'nome' =>   'koloxx',
            'latitude' => 654,
            'longitude' => 457
        ];
//        
//        $country = Country::create($dataForm);
//        
//        $dataForm['country_id'] = $country->id;
//        
//        Location::create($dataForm);
        
        $country = Country::where('nome','Grecia')->get()->first();
        
        $location = $country->location()->create($dataForm);
        
        var_dump($location);
    
        //return redirect()->route('inverse');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
