<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LinechartController extends Controller
{
    public function linechart(Request $request)
    {
    	$phone_18 = Product::where('product_type','phone')->where('year','2018')->get(); 
    	$phone_19 = Product::where('product_type','phone')->where('year','2019')->get();
    	$phone_20 = Product::where('product_type','phone')->where('year','2020')->get();   	
    	
    	$laptop_18 = Product::where('product_type','laptop')->where('year','2018')->get();
    	$laptop_19 = Product::where('product_type','laptop')->where('year','2019')->get();
    	$laptop_20 = Product::where('product_type','laptop')->where('year','2020')->get();

    	$tablet_18 = Product::where('product_type','tablet')->where('year','2018')->get();
    	$tablet_19 = Product::where('product_type','tablet')->where('year','2019')->get();
    	$tablet_20 = Product::where('product_type','tablet')->where('year','2020')->get();
    	
    	$phone_count_18 = count($phone_18);    	
    	$phone_count_19 = count($phone_19);
    	$phone_count_20 = count($phone_20);
    	
    	$laptop_count_18 = count($laptop_18);
    	$laptop_count_19 = count($laptop_19);
    	$laptop_count_20 = count($laptop_20);

    	$tablet_count_18 = count($tablet_18);
    	$tablet_count_19 = count($tablet_19);
    	$tablet_count_20 = count($tablet_20);
    	
    	return view('linechart',compact('phone_count_18','phone_count_19','phone_count_20','laptop_count_18','laptop_count_19','laptop_count_20','tablet_count_18','tablet_count_19','tablet_count_20'));
    }
}
