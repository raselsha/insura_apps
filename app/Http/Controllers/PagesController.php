<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Policy;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function get(){
       return view('global.auth');
    }
}
