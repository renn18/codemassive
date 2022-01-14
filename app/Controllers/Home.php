<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('page/index');
    }

    public function landingpage()
    {
        return view('page/landingpage');
    }

    
}
