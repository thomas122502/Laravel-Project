<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function brand(){
        $databrand = DB::table('brands')->get();
        return view('brand', compact('databrand'));
    }

    function product(){
        $dataproduct = DB::table('products')->get();
        return view('product', compact('dataproduct'));
    }

    function customer(){
        $datacustomer = DB::table('customers')->get();
        return view('customer', compact('datacustomer'));
    }
}
