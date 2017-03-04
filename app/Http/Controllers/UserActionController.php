<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 2.3.2017 г.
 * Time: 20:20
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Http\Request;

class UserActionController extends Controller
{

    public function index(){

//        var_dump($customer);
    }

    public function addUser(Request $request){
        $customer = new Customer;
        $customer -> first_name = $request->input('first_name');
        $customer -> last_name =  $request->input('last_name');
        $customer -> gender = $request->input('gender');
        $customer -> telephone = $request->input('telephone');
        $customer -> email = $request->input('email');
        $customer -> save();
        return view('success', [
            'message' => 'Записът е успешно направен!'.'</br>'.'</br>'.
                '<img src="https://media.tenor.co/images/2a8c16ba3bac31f0e39648de78e14406/raw" height="400" width="800"/>'

        ]);
    }

    public function deleteUser($id){
        $customer = Customer::find($id);
        $customer -> delete();
        return view('success', [
            'message' => 'Записът е успешно изтрит!'.'</br>'.'</br>'.
                '<img src="https://media.giphy.com/media/7ILa7CZLxE0Ew/giphy.gif" height="400" width="800"/>'
        ]);
    }

    public function editUser($id){

        $customers = Customer::find($id);
        return view('editCustomer', [
            'customer' => $customers
        ]);

    }

    public function saveEditUser(Request $request){
        $customer = Customer::find($request->input('customer_id'));
        $customer -> first_name = $request->input('first_name');
        $customer -> last_name =  $request->input('last_name');
        $customer -> gender = $request->input('gender');
        $customer -> telephone = $request->input('telephone');
        $customer -> email = $request->input('email');
        $customer -> update();

        return view('success', [
            'message' => 'Записът е успешно редактиран!'.'</br>'.'</br>'.
                '<img src="https://media.tenor.co/images/b910eef482ebf7f15aa6da0cc648f827/raw" width="800"/>'
        ]);

    }
}