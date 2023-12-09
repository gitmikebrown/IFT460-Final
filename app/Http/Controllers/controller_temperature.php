<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temperature;

class controller_temperature extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $code=$request->code;
        
        if($code == "ST8eCoMykF")
        {
            $info= new temperature;
            $info->temp_f=$request->temp_f;
            $info->temp_c=$request->temp_c;
            $saved=$info->save();
            
            if($saved){

                $random_NUMBER = rand(1,100);
                return ["Result"=>"temperature data has been saved $random_NUMBER"];
            }
            else{
                $random_NUMBER = rand(1,100);
                return ["Result"=>"temperature data has NOT been saved $random_NUMBER"];

            }
        }
        else{
            $random_NUMBER = rand(1,100);
                return ["Result"=>"YOU ARE NOT AUTH $random_NUMBER"];

        }

     
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
