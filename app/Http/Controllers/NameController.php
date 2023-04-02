<?php

namespace App\Http\Controllers;

use APP\Models\User;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function name (String $name){
        return view('hello', ['name' => $name]);
    }
}
