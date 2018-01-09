<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Date;
use App\Number;
use App\DateCustomer;
use Carbon\Carbon;
use App\Customer;
class NumberController extends BaseController
{
    public function index(Request $request){
    	$date = Date::orderBy('id','DESC')->paginate(10);

        $date = $this->handleDay($date);

    	$request->session()->flash('active','number');

    	return view('admin.sites.number_index',[
    		'date'=>$date,
    	]);

    }

    public function handleDay($date){
        foreach ($date as $key => $kq) {
            $name = __('texts.'.Carbon::parse($kq->day)->formatLocalized('%a')).' - Ngày '.Carbon::parse($kq->day)->format('d');
            $date[$key]->name = $name;
            
        }
        return $date;
    }

    public function detail(Request $request,$id){
    	$date = Date::with('date_customer.numbers')->with('chanel')->where('id',$id)->first();
    	// $customers = Customer::all();
    	$request->session()->flash('active','number');
    	// dd($date->toArray());
    	return view('admin.sites.number_detail',[
    		'date'		=>$date,
    		// 'customers'	=>$customers,
    	]);
    }

    public function getNumber($id){
    	$date = Date::where('id',$id)->with('date_customer')->first();
    	// $date = [];
    	dd($date);
        if(!$date){
            return $this->responseError('Date not found');
        }

        return $this->responseSuccess('Date successfully',$date);
    }

    public function createDateCustomer(Request $request){
        $input = $request->all();
        $find = DateCustomer::where('date_id',$input['id_date'])->where('customer_id',$input['id_customer'])->with('numbers')->first();
        if(!$find){
            $date_customer = DateCustomer::create([
                'date_id'=>$input['id_date'],
                'customer_id'=>$input['id_customer'],
            ]);
            $message = 'DateCustomer Create  successfully';
        }else{
            $date_customer = $find;
            $message = 'DateCustomer   successfully';
        }
        return $this->responseSuccess($message,$date_customer);
    }
    public function createNumber(Request $request){
        $input = $request->all();
        $number = Number::Create($input);
        if(!$number){
            return $this->responseError('Date not found');
        }

        return $this->responseSuccess('Date successfully',$number);

    }
}
