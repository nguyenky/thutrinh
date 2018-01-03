<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LotteryResultsController extends Controller
{
    public function index(Request $request){

    	$request->session()->flash('active','lottery_results');
    	
    	return view('admin.sites.lotteryResults');

    }
}
