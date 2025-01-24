@extends('layouts.app')
    @section('content')
<div class="container-fluid" style="margin-top: 10px;">
    <div class="jumbotron services-header-container" style="background-color: #3DDAD7;">
        <img class="plane-image" src="/images/airplanelanding.png" alt="plane taking off" height="350px" width="350px">
        {{-- <a href='https://pngtree.com/so/png'>png png from pngtree.com</a> --}}
        <h3 class="h3" style="color: #fff;">Our Services</h3>
        <h1 class="h1"   style="color: #ffc72c;">Fast, Convinient Shipping</h1>
    </div>

    {{-- Services --}}
    <div class="row p-3">
        <div class="col-sm">
            <div class="card service-card" style="width: 18rem;">
                <div class="card-body">
                  <img class="card-img-top" src="/images/plane-delivery.png" alt="Image of plane" height="150px">
                  <h3 class="card-title">Standard Shipping</h3>
                  <h5>$1.12 / LBS</h5>
                  <p class="card-text service-description"> Average shipping time 3-5 business days</p>
                </div>
              </div>
        </div>
        <div class="col-sm">
          <div class="card service-card" style="width: 18rem;">
              <img class="card-img-top" src="/images/black-delivery-man.png" alt="Image of Delivery Truck" height="250px">
              <div class="card-body">
                <h3 class="card-title">Door to Door Deliver</h3>
                <h5>Free Delivery</h5>
                <p  class="card-text service-description">We deliver to your door step for no extra charge!</p>
              </div>
            </div>
      </div>

        <div class="col-sm">
            <div class="card service-card" style="width: 18rem;">
                <img class="card-img-top" src="/images/shipping-pallet.png" alt="Image of pallet shipping" height="250px">
                <div class="card-body">
                  <h3 class="card-title">Pallet Shipping</h3>
                  <h5>$100.00 / LBS</h5>
                  <p class="card-text service-description">We also ship pallets at!</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
