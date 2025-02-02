<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerPackage;


class SearchIncommingPackages extends Controller
{
    public function search(Request $request)
    {

        if(auth()->user()->user_role == 'customer'){
            return redirect('/')->with('error','User not found !');
        }
        
        $customerName = $request->input('customer_name');
        $trackingNumber = $request->input('tracking_number');


        $customerPackages = CustomerPackage::where('customername', 'like', '%'.$customerName.'%')
        ->where('originaltrackingnumber', 'like', '%'.$trackingNumber.'%')
        ->where('package_received', '0')->get();
        
        return view('managepackages.index', compact('customerPackages'));
    }


}
