<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\temperature;

class controller_sensor1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temperature = DB::table('temperature')->get();
        


        //dd($temperature);
        
        return view('sensor1', ['temperature'=>$temperature]);
        
        
        
    }

}
