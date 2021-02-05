<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.index');
    }

    public function listStaff(){
        return view('superadmin.staff_employee');
    }

    public function addStaff(){
        return view('superadmin.add_staff');
    }
}
