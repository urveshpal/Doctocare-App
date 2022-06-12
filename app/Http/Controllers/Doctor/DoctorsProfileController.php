<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsProfileController extends Controller
{
    public function index(){
        return view ('user.doc_profile');
    }
}
