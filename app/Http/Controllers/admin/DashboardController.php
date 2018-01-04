<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request){

    	$request->session()->flash('active','dashboard');

    	return view('admin.sites.dashboard');
    }
}
