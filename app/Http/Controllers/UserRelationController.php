<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 2.3.2017 г.
 * Time: 20:20
 */

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
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

        $customer = Customer::find($id);
        return view('company', [
            'customer' => $customer //ключ-стойност
        ]);
    }

    public function displayProduct($id){

        $customer = Customer::find($id);
        return view('product', [
            'customer' => $customer //ключ-стойност
        ]);
    }
}