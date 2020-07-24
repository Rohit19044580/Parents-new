<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Parents;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function home(){
        return view('students.home');
    }
   


}