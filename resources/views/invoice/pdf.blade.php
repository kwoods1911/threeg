


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'pdf.css' }}" type="text/css">
    <title>Invoice</title>
</head>


<body>
<div>
    <div class="margin-top">
        <h1 class="logo">THREE G SHIPPING LTD.</h1>
        <span class="w-half">
            #123 Johnson St. Nassau
            <br>
            New Providence Bahamas
            <br>
            Tel: 242-333-1290
        </span>

        <div class="w-half">
        <p>Invoice    #{{$invoice->id}}</p>
        <p>Date:       {{$invoice->created_at}}</p>
        <p>Created By: {{$invoice->manager_name}}</p>
            <p>Customer ID: {{$invoice->customer_id}} </p>
            <p>Customer Name: {{$invoice->customer_name}} </p>
        </div>
    </div>
    


<div class="margin-top">
<table class="products">

<thead>
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>VAT(12%)</th>
        <th>Total</th>
    </tr>
</thead>


    <tr class="items">
        <td>Freight: {{$invoice->package_weight}} (LBS)</td>
        <td>$ {{round($invoice->shipping_cost,2)}} </td>
        <td>$ {{round($invoice->shipping_cost_vat,2)}}</td>
        <td>$ {{round($invoice->shipping_cost_total,2)}}</td>
    </tr>
    <tr class="items">
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
        <td>Final</td>
        <td>$ {{round($invoice->subtotal,2)}}</td>
        <td>$ {{round($invoice->subtotal_vat,2)}}</td>
        <td>$ {{round($invoice->final_total,2)}}</td>
    </tr>
 
</table>
</div>

    
    <p>
        Three G LTD is not responsible for damages items and packages or shortages of items received
        on of the packages are in posession of the customer.
        This document does not confirm that the item has been paid for.
        Package MUST BE collected within 5 business days of arriving to Nassau. Packages left after 30days will be sold to cover the costs.
    </p>
    

</div>
 
</body>

