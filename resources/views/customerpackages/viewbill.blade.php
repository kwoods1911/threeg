@extends('layouts.app')

@section('content')
{{-- <a href="/inventorymanagement/{{$invoice->packageid}}" class="btn btn-primary">Go Back</a> --}}

<div class="container">
    <div class="view-bill-container">
        <h1>THREE G SHIPPING LTD.</h1>
        <address>
            #123 Johnson St. Nassau
            <br>
            New Providence Bahamas
            <br>
            Tel: 242-333-1290
        </address>

        <div class="invoice-header">
            Invoice    #{{$invoice->id}}
            <br>
            Date:       {{$invoice->created_at}}
            <br>
           Created By: {{$invoice->manager_name}}
           <br>
        </div>
        
        
        
        <div class="invoice-header">
            Customer ID: {{$invoice->customer_id}}
            <br>
            Customer Name: {{$invoice->customer_name}}
        </div>
           
       
        
       
    </div>
    <a href="{{ route('download.invoice', $invoice->id) }}" class="btn btn-primary">Download Invoice</a>
    <table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>VAT(12%)</th>
            <th>Total</th>
        </tr>
    </thead>

    
        <tr>
            <td>Freight: {{$invoice->package_weight}} (LBS)</td>
            <td>$ {{round($invoice->shipping_cost,2)}} </td>
            <td>$ {{round($invoice->shipping_cost_vat,2)}}</td>
            <td>$ {{round($invoice->shipping_cost_total,2)}}</td>
        </tr>
        <tr>
            <td>Package Desc.
                <b>{{$invoice->package_description}}</b>
                <br>
                <span>Item Value ${{round($invoice->item_value,2)}}</span>
                <br>
                <span>CUSTOMS DUTY {{$invoice->customs_rate}} %</span>
            </td>
            <td>$ {{round($invoice->customs_tax_amount,2)}}</td>
            <td>$ {{round($invoice->customs_tax_amount_vat,2)}}</td>
            <td>$ {{round($invoice->customs_tax_total,2)}}</td>
        </tr>
    
        <tr>
            <td>Processing</td>
            <td>$ {{round($invoice->processing_fee,2)}}</td>
            <td>$ {{round($invoice->processing_fee_vat,2)}}</td>
            <td>$ {{round($invoice->processing_fee_total,2)}}</td>
        </tr>
    
        <tr>
            <td><b>Final</b></td>
            <td>$ {{round($invoice->subtotal,2)}}</td>
            <td>$ {{round($invoice->subtotal_vat,2)}}</td>
            <td>$ {{round($invoice->final_total,2)}}</td>
        </tr>
     
    </table>
    
    <p>
        Three G LTD is not responsible for damages items and packages or shortages of items received
        on of the packages are in posession of the customer.
        This document does not confirm that the item has been paid for.
        Package MUST BE collected within 5 business days of arriving to Nassau. Packages left after 30days will be sold to cover the costs.
    </p>
   
   
</div>
@endsection