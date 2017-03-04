<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //проверява дали потребителят е вписан
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::select('select * from customers');
//        $users = 'hello';
//        $users2 = 'it is';
//        $users3 = 'me';
//        $users4 = array('banan','portokal','qbylka');
        return view('home', [
            'customer' => $customers
        ]);

    }
}
