<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function on_get(){
        $c_all = Customer::all();
        return response()->json($c_all, 200);
    }

    public function on_get_by_id($id){
        $c = Customer::find($id);
        return response()->json($c, 200);
    }

    public function on_post(){
        $c = new Customer();
        $c->name = request('name');
        $c->dob  = request('dob');
        $c->save();
    }

    public function on_put($id){
        $c = Customer::find($id);
        $c->name = request('name');
        $c->dob  = request('dob');
        $c->save();
    }

    public function on_delete($id){
        $c = Customer::find($id);
        $c-> delete();

    }

}
