<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
class CustomerController extends BaseController
{
    public function index(Request $request){

    	$customers = Customer::all();

    	$request->session()->flash('active','customer');

    	return view('admin.sites.customer',[
    		'customers'=>$customers,
    	]);
    }

    public function apiGetCustomer(){

    	$customers = Customer::all();

    	if(!$customers){
            return $this->responseError('Customer not found');
        }

        return $this->responseSuccess('Customer successfully',$customers);
    }
}
