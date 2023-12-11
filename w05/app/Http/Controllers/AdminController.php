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



    //delete
    function delete($id){
        DB::table('brands')->where('id',$id)->delete();
        return redirect('/brand');
    }
    function deleteproduct($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect('/product');
    }
    function deletecustomer($id){
        DB::table('customers')->where('id',$id)->delete();
        return redirect('/customer');
    }


    //edit
    function edit($id){
        $edit=DB::table('brands')->where('id',$id)->first();
        return view('/editbrand',compact('edit'));
    }

    function editproduct($id){
        $editproduct=DB::table('products')->where('id',$id)->first();
        return view('/editproduct',compact('editproduct'));
    }

    function editcustomer($id){
        $editcustomer=DB::table('customers')->where('id',$id)->first();
        return view('/editcustomer',compact('editcustomer'));
    }




    //insert
    function insertbrand(Request $request){
        $request -> validate([
            'brand_name'=> 'required|max:50',
        ]);
        
        $data1 = [
            'brand_name'=>$request->brand_name,
        ];
        DB::table('brands')->insert($data1);
        return redirect('/form');
    }


    function insertproduct(Request $request){
        $request -> validate([
            'product_name'=>'required|max:50',
            'product_desc'=>'required',
            'product_price'=>'required',
        ]);
        $data2 = [
            'product_name'=>$request->product_name,
            'product_desc'=>$request->product_desc,
            'product_price'=>$request->product_price,
        ];

        DB::table('products')->insert($data2);
        return redirect('/form');
    }


    function insertcustomer(Request $request){
        $request -> validate([
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'password'=>'required',
        ]);
        $data3 = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'password'=>$request->password,
        ];
        DB::table('customers')->insert($data3);
        return redirect('/form');
    }
}
