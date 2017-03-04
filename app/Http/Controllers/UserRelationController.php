<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 2.3.2017 г.
 * Time: 20:20
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Sales;
use Illuminate\Http\Request;

class UserRelationController extends Controller
{
    public function displaySales($id){

        $sales = Sales::all();
        return view('sales', [
            'sale' => $sales
        ]);
    }
}