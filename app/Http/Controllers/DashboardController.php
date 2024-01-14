<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //create a function called index
    public function index()
    {
        //create a variable called name and assign it a value
        $page = "Dashboard";
        //return the view tasks.index and pass the variable name
        return view("dashboard.index")->with("page", $page);
    }
}
