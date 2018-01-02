<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kqxs;
use App\User;
use App\Chanel;
use Carbon\Carbon;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function kqxs(){
        $this->checkAndAdd();
        // $this->delDay(91);
        // Kqxs::find(111)->delete();
        // dd('sad')
        // Kqxs::find(71)->delete();
        // User::create([
        //         'name' => 'asdsd',
        //         'email' => 'lenguyenky@gmail.com',
        //         'password' => 'asdsd',
        //     ]);
        // dd('s');
        $kqxs = Kqxs::orderBy('id','DESC')->get();
        $kqxs = $this->handleDay($kqxs);
        // dd($kqxs->toArray());
        return view('home.contents.kqxs',[
            'kqxs' => $kqxs,
        ]);
    }

    public function handleDay($kqxs){
        foreach ($kqxs as $key => $kq) {
            $name = __('texts.'.Carbon::parse($kq->day)->formatLocalized('%a')).' - Ngày '.Carbon::parse($kq->day)->format('d');
            $kqxs[$key]->name = $name;
            
        }
        return $kqxs;
        // dd($kqxs->toArray());
    }

    public function checkAndAdd(){
        $toDay = Carbon::now()->format('Y-m-d');
        $check = Kqxs::whereDate('day',$toDay)->first();
        if(!$check){
            $kqxs = Kqxs::create(['day'=>$toDay]);
            $arrayChanel = $this->shareChanel(Carbon::parse($toDay)->formatLocalized('%a'));
            foreach ($arrayChanel as $key => $value) {
                $kqxs->chanel()->create([
                    'date'=>$toDay,
                    'name'=>$value['chanel'],
                    'code'=>$value['code']
                ]);
            }
        }

    }
    public function test($id){

       // $kqxs = Kqxs::where('id',$id)->with(['chanel',function($query){
       //      // $query->chanel_value()->get();
       //  }])->first();
        $kqxs = Kqxs::where('id',$id)->with('chanel.chanel_value')->first();
       dd($kqxs->toArray());
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
        $kqxs = Kqxs::where('id',$id)->with('chanel.chanel_value')->first();
        if(!$kqxs){
            return $this->responseError('Kqxs not found');
        }

        return $this->responseSuccess('Kqxs successfully',$kqxs);
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
