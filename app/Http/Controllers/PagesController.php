<?php
/**
 * Student: Khari Woods
 * Course CIS2261
 * Date: March 19, 2020
 * Controller Description: This controller is reponsible for managing the basic pages of the website.
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//KW importing Models to be used
use App\Models\CustomerPackage;
use App\Models\ReceivedPackages;
use App\Models\ThreeG_Invoices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\CustomerPackagesController;
class PagesController extends Controller
{
    //KW - this controller is resonsible for assigning views to the basic pages in the application.

    public function index(){
        $title = "Welcome to Three G Shipping";//KW title variable to be displayed on index page
        return view('pages.index')->with('title', $title);//KW -passing in title parameters to index page.
    }

    public function about(){
        $title = 'Get To Know Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => "Three G's Services",
            'services' => ['Package Tracking', 
            'Low Cost Shipping From Miami To Nassau',
            'Free delivery',
            'Upload Invoice for billing'
            ]
        );
        return view('pages.services')->with($data);//KW passing in an array of data to services page.
    }

    public function viewpdf($id){
        //TODO: refactor so that pdf is retrieved from s3 rather than local environment.
        $fileName = DB::select("SELECT customer_invoice FROM customer_packages WHERE id = $id");

        if($fileName == null){
            return redirect('/customerpackage')->with('error','File not found !');
        }

        $headers = [
            'Content-Type' => 'application/jpeg',
            'Content-Disposition' => 'attachment; filename="'.$fileName[0]->customer_invoice . '"',
        ];
            //KW select file from s3 determine if file exists.
            $file = Storage::disk('s3')->get("invoices/".$fileName[0]->customer_invoice);
            return response($file, 200,$headers);
    }

    public function viewbill($trackingnumber){
        //KW select $id where tracking number is equal to $id.
        $invoiceID = DB::select("SELECT id FROM threeg_invoice WHERE  package_tracking_number = $trackingnumber AND customer_id = ".auth()->user()->id);
        
     

        if($invoiceID == null){
            return view('customerpackages.invoicepending');
        }else{
            $invoice = ThreeG_Invoices::find($invoiceID[0]->id);
            return view('customerpackages.viewbill')->with('invoice',$invoice);
        }  
    }
}
