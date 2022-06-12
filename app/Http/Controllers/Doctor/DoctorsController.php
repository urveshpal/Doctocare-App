<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    public function index($id){

        $doctor = Doctor::where('category_id',$id)->get();
        $data = compact('doctor');
        return view ('user.doc_card_profile')->with($data);
    }
}
