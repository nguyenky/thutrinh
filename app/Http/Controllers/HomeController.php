<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kqxs;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
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
        

        // User::create([
        //         'name' => 'asdsd',
        //         'email' => 'lenguyenky@gmail.com',
        //         'password' => 'asdsd',
        //     ]);
        // dd('s');
        $kqxs = Kqxs::orderBy('id','DESC')->get();
        $kqxs = $this->handleDay($kqxs);
        dd($kqxs->toArray());
        return view('home.contents.kqxs');
    }

    public function handleDay($kqxs){
        foreach ($kqxs as $key => $kq) {
            $name = __('texts.'.Carbon::parse($kq->day)->formatLocalized('%a')).' - Ngày '.Carbon::parse($kq->day)->format('d');
            $kqxs[$key]->name = $name;
            
        }
        dd($kqxs->toArray());
    }
}
