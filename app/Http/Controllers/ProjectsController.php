<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        $page = "Projects";
        return view("projects.index")->with("page", $page);
    }
}
