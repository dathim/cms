<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($br1='',$br2='',$br3='',$br4='',$br5='',$br6='') {
    	//search curent page and print or 404 errore
    	echo  asset("bootstrap/css/bootstrap.css"); 
        return view('welcome');
    }
}
