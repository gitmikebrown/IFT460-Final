<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\humidity;

class controller_sensor2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $humidity = DB::table('humidity')->get();
    
        //dd($humidity);
    
        return view('sensor2', ['humidity'=>$humidity]);
    }

   
}
