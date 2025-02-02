<?php
/**
 * Student: Khari Woods
 * Course CIS2261
 * Date: March 19, 2020
 * Controller Description: This controller is reponsible for creating the reports for the packages that have been 
 * received in the inventory.
 */
namespace App\Http\Controllers;

use App\Models\ShipmentReport;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ShipmentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //KW - pull information from database.
        $reports = ShipmentReport::all();
        if(auth()->user()->user_role == 'customer'){
            return redirect('/home');
        }else{
        return view('shipmentreport.index')->with('reports',$reports);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->user_role == 'customer'){
            return redirect('/home');
        }else{
        return view('shipmentreport.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //KW - adding logic to store report information
        $this->validate($request,[
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        // $package->dateofarrival = $request->input('dateofarrival');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        //KW store report parameters in database.
        $shipmentReport = new ShipmentReport;
        $shipmentReport->date_of_report = Carbon::now();/**get current date */
        $shipmentReport->start_date = $startDate;
        $shipmentReport->end_date = $endDate;
        $shipmentReport->save();        
        //KW instead store search parameters for report.    
        //KW - run query to get newly created report # and redirect user to that page.    
         return redirect('/shipmentreport')->with('success','Report Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipmentReport  $shipmentReport
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

        $reportParameters = ShipmentReport::find($id);
        if(is_null( $reportParameters )){
            return redirect('/shipmentreport')->with('error','Report not found !');
        }
        $startDate = $reportParameters->start_date;
        $endDate = $reportParameters->end_date;
        

       
        
        

        $reportData = DB::table('received_packages')
                    ->join('threeg_invoice','threeg_invoice.packageid', '=', 'received_packages.id')
                    ->select('received_packages.*', 'threeg_invoice.final_total')
                    ->whereDate('received_packages.dateofarrival', '>=', $startDate, 'AND' , 'received_packages.dateofdeparture','<=', $endDate)
                    ->get();

                    

        if(auth()->user()->user_role == 'customer'){
                        return redirect('/home');
                    }else{
                        return view('shipmentreport.show')->with('report_parameters',$reportParameters)
                        ->with('report_data',$reportData);
                    }

                                }

    /**
     * Show the form for editing the specified resource.
      * @param  int  $id
     * @param  \App\Models\ShipmentReport  $shipmentReport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report_parameters = ShipmentReport::find($id);


        if(is_null( $report_parameters)){
            return redirect('/shipmentreport')->with('error','Report not found !');
        }
        if(auth()->user()->user_role == 'customer'){
            return redirect('/home');
        }else{
        return view('shipmentreport.edit')->with('report_parameters',$report_parameters );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipmentReport  $shipmentReport
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $shipmentReport = ShipmentReport::find($id);
        $shipmentReport->start_date = $request->input('start_date');
        $shipmentReport->end_date = $request->input('end_date');
        $shipmentReport->save();


        $startDate = $shipmentReport->start_date;
        $endDate = $shipmentReport->end_date;


        
        // $reportData = DB::table('received_packages')
        // ->join('threeg_invoice','threeg_invoice.packageid', '=', 'received_packages.id')
        // ->select('received_packages.*', 'threeg_invoice.final_total')
        // ->whereDate('received_packages.dateofarrival', '>=', $startDate, 'AND' , 'received_packages.dateofdeparture','<=', $endDate)
        // ->get();

        return redirect("/shipmentreport")->with('success','Report Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipmentReport  $shipmentReport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //KW -finding specific report and deleting in data base.
        $shipmentReport = ShipmentReport::find($id);
        $shipmentReport->delete();
        return redirect("/shipmentreport")->with('success','Report Deleted !');
    }
}
