<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    
    public function GetData()
    {
        //return "Hello World";

        $result = 10 + 15;

        

        return view('app', ['name' => 'James'] );
    }

    public function GetData2($id = "")
    {
        return "Hello World" . $id;
    }
    
}
