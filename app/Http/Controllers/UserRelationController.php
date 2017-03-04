<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 2.3.2017 г.
 * Time: 20:20
 */

namespace App\Http\Controllers;

use App\Company;
use App\Http\Controllers\Controller;
use App\Sales;
use Illuminate\Http\Request;

class UserRelationController extends Controller
{
    public function displaySales($id){

        $sales = Sales::where('customer_id', $id)->get();
        return view('sales', [
            'sale' => $sales //ключ-стойност
        ]);
    }

    public function displayCompany($id){

        $companies = Company::where('customer_id', $id)->first();
        return view('company', [
            'company' => $companies //ключ-стойност
        ]);
    }
}