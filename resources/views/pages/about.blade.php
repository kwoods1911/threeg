@extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        {{-- Insert translucent background color --}}
        <div class="header-container text-center">
            <div class="overlay">
                <h1>Who We Are </h1>
            <h5>We are a professional Freight Forwarding Company that has been operating in Nassau Bahamas since 2019. Our mission has been and will
                always be to provide Bahamians with afforable and reliable shipping solutions.
            </h5>
        </div>
        </div>
        <h1 class="text-center" style="padding-top: 35px;">Meet The Team</h1>
        <hr>
        {{-- Insert picture related to shipping --}}

        <div class="row p-3">
            <div class="col-sm">
                <div class="card employee-card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/black-male-executive.jpg" alt="Image of Adebo">
                    <div class="card-body">
                      <h3 class="card-title job-title">Warehouse Manager (Miami)</h3>
                      <p class="card-text">Adebo Woods has been a manager at Three G shipping since the inception of the company.</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
              <div class="card employee-card" style="width: 18rem;">
                  <img class="card-img-top" src="/images/black-female-executive.jpg" alt="Image of Adebo">
                  <div class="card-body">
                    <h3 class="card-title job-title">Warehouse Manager (Nassau)</h3>
                    <p class="card-text">Adebo Woods has been a manager at Three G shipping since the inception of the company.</p>
                  </div>
                </div>
          </div>

            <div class="col-sm">
                <div class="card employee-card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/black-delivery-driver.jpg" alt="Image of Adebo">
                    <div class="card-body">
                      <h3 class="card-title job-title">Delivery Driver</h3>
                      <p class="card-text">Adebo Woods has been a manager at Three G shipping since the inception of the company.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div> 
@endsection