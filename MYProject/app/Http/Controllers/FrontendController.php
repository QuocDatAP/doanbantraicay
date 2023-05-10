<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class FrontendController extends Controller
{
    public function index(){
        $data = product::get();
        //return $data;
        return view('Frontend.index',compact('data'));
    }
    public function cart()
    {
        return view('Frontend.pages.cart');
    }

    public function single()
    {
        $data = product::get();
        //return $data;
        return view('Frontend.pages.single',compact('data'));
    }
    public function product(){
        
        $data = product::get();
        //return $data;
        return view('Frontend.pages.product',compact('data'));
    }
    
}
