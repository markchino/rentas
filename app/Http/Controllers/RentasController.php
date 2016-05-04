<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RentasController extends Controller
{
    public function index($id){
         return view('rentas.index')->withId($id);
    }
}
