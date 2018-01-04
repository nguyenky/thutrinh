<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Date;
use App\User;
use App\Chanel;
use Carbon\Carbon;
class LotteryResultsController extends BaseController
{
    public function index(Request $request){
    	$this->checkAndAdd();
    	$date = Date::orderBy('id','DESC')->get();
        $date = $this->handleDay($date);

    	$request->session()->flash('active','lottery_results');
    	// dd($date->toArray());
    	return view('admin.sites.lotteryResults',[
    			'date' => $date,
    	]);

    }

    public function handleDay($date){
        foreach ($date as $key => $kq) {
            $name = __('texts.'.Carbon::parse($kq->day)->formatLocalized('%a')).' - Ngày '.Carbon::parse($kq->day)->format('d');
            $date[$key]->name = $name;
            
        }
        return $date;
    }

    public function checkAndAdd(){
        $toDay = Carbon::now()->format('Y-m-d');
        $check = Date::whereDate('day',$toDay)->first();
        if(!$check){
            $date = Date::create(['day'=>$toDay]);
            $arrayChanel = $this->shareChanel(Carbon::parse($toDay)->formatLocalized('%a'));
            // dd($arrayChanel);
            foreach ($arrayChanel as $key => $value) {
                $date->chanel()->create([
                    'date'=>$toDay,
                    'name'=>$value['chanel'],
                    'code'=>$value['code']
                ]);
            }
        }

    }
    public function shareChanel($day){
        $arrayChanel = [];
        switch ($day) {
            case 'Mon':
                $arrayChanel = [
                    ['chanel'=>'Phú Yên','code'=>'PY'],
                    ['chanel'=>'Thừa Thiên Huế','code'=>'TTH'],
                ];
                break;
            case 'Tue':
                $arrayChanel = [
                    ['chanel'=>'Đắk Lắk','code'=>'DKL'],
                    ['chanel'=>'Quảng Nam','code'=>'QN'],
                ];
                break;
            case 'Web':
                $arrayChanel = [
                    ['chanel'=>'Đà Nẵng','code'=>'DN'],
                    ['chanel'=>'Khánh Hòa','code'=>'KH'],
                ];
                break;
            case 'Thu':
                $arrayChanel = [
                    ['chanel'=>'Bình Định','code'=>'BD'],
                    ['chanel'=>'Quảng Bình','code'=>'QB'],
                    ['chanel'=>'Quảng Trị','code'=>'QT'],
                ];
                break;
            case 'Fri':
                $arrayChanel = [
                    ['chanel'=>'Gia Lai','code'=>'GL'],
                    ['chanel'=>'Ninh Thuận','code'=>'NT'],
                ];
                break;
            case 'Sat':
                $arrayChanel = [
                    ['chanel'=>'Đà Nẵng','code'=>'DN'],
                    ['chanel'=>'Đắk Nông','code'=>'DKN'],
                    ['chanel'=>'Quảng Ngãi','code'=>'QNG'],
                ];
                break;
            case 'Sun':
                $arrayChanel = [
                    ['chanel'=>'Khánh Hòa','code'=>'KH'],
                    ['chanel'=>'KonTum','code'=>'KT'],
                ];
                break;
            default:
                //code to be executed
        }
        return $arrayChanel;
    }

    public function apiGetChanel($id){

        $date = Date::where('id',$id)->with('chanel.chanel_value')->first();
        if(!$date){
            return $this->responseError('Date not found');
        }

        return $this->responseSuccess('Date successfully',$date);
    }

    public function updateValue($id, Request $request){
        $input = $request->all();
        $chanel = Chanel::find($id);
        foreach ($input as $key => $values) {
            if(count($values)){
                foreach ($values as $value) {
                    if($value){
                        $chanel->chanel_value()->create([
                            'giai' => $key,
                            'value' => intval($value['value']),
                            'chanel_id'=> $id,
                        ]);
                    }
                    
                }
            }
            
        }
        $this->apiGetChanel($id);
    }
}
