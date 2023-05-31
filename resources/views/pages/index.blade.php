@extends('layouts.app')
    @section('content')
            <div class="custom-container content-container">
                <div class="overlay">
                    <h1>{{$title}}</h1>
                    <h4>Fast, Convinient and Reliable Shipping !</h4>
                </div>
                
            </div>

            <div id="section-1" class="container">
                <h1 class="section-header">We ship all sizes.</h1>
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/smallpallet.png" alt="" class="img-thumbnail img-thumbnail-small-pallet">
                        <p class="img-label">
                            <b>Small</b>
                        </p>
                    </div>

                    <div class="col-sm">
                        <img src="/images/mediumpallet.png" alt="" class="img-thumbnail img-thumbnail-medium-pallet">
                        <p class="img-label">
                            <b>Medium</b>    
                        </p>
                    </div>

                    <div class="col-sm">
                        <img src="/images/largepallet.png" alt="" class="img-thumbnail">
                        <p class="img-label">
                            <b>Large</b>
                        </p>
                    </div>
                </div>
            </div>

        {{-- Our Services --}}
 
            
            <div id="section-2" class="container-fluid">
                <h1 class="section-header" style="color: #fff">Our Services</h1>
                <div class="row our-services-row">
                    
                    <div class="col-md">
                        <img src="/images/1-blackdeliveryguy.jpg" alt="" class="img-thumbnail img-icon">
                        <h2>Free Delivery</h2>
                        <p>We deliver directly to your doorstep free of charge.</p>
                    </div>
                    <div class="col-md">
                        <img src="/images/2-packagetracking.JPG" alt="" class="img-thumbnail img-icon">
                        <h2>Package Tracking</h2>
                        <p>Use your tracking number to keep track of your package.</p>
                    </div>
                    <div class="col-md">
                        <img src="/images/3-lowcostshipping.jpg" alt="" class="img-thumbnail img-icon">
                        <h2>Low Cost Shipping</h2>
                        <p>Save money withOur rates are one of the lowest in the Bahamas. Only $1.20 per pound.</p>
                    </div>
                </div>
            </div>
            
            <div id="section-3" class="container-fluid">
                <h1 class="section-header">How It Works</h1>
                <div class="row">
                    <div class="col-md">
                        <img src="/images/1-orderonline.JPG" alt="" class="img-thumbnail">
                        {{-- <a href='https://www.freepik.com/vectors/logo'>Logo vector created by jcomp - www.freepik.com</a> --}}
                        <h3 class="how-it-works-header">1. Order Online</h3>
                        <p>Order your package online and ship to our US address.</p>
                    </div>

                    <div class="col-md">
                        <img src="/images/invoice.jpg" alt="" class="img-thumbnail">
                        {{-- <a href='https://www.freepik.com/vectors/business'>Business vector created by freepik - www.freepik.com</a> --}}
                        <h3 class="how-it-works-header">2. Send Us Your Invoice</h3>
                        <p>Upload your invoice.</p>
                    </div>

                    <div class="col-md">
                        <img src="/images/collectpackage.jpg" alt="" class="img-thumbnail">
                        <h3 class="how-it-works-header">3. Collect Your Package</h3>
                        <p>Collect your package as soon as it arrives in Nassau.</p>
                    </div>
                </div>
            </div>



            
            <div id="contact-section" class="container-fluid">
                <h1 class="section-header" style="color: #fff">Contact Us</h1>
            <div id="card-background" class="card">
                <div class="row">
                    <div class="col-md">
                        <h3>Nassau Address</h3>
                        <h4>Location</h4>
                        <address>
                            Street Name 
                            <br>
                            Nassau, Bahamas 
                        </address>

                        <h4>Hours</h4>
                        <p>Monday - Friday</p>
                        <p>9am to 5pm</p>
                        <h4>Telephone</h4>
                        <p>1-242-394-0000</p>
                    </div>
                    <div class="col-md">
                        <h3>U.S Address</h3>
                        <h4>Location</h4>
                        <address>
                            Customer Name
                            <br>
                            7908 NW 71ST TER
                            <br>
                            Tamarac, Florida 33321
                            <br>
                            United States
                            <br>
                            <p>Your Phone Number</p>
                        </address>
                        <h4>Hours</h4>
                        <p>Monday - Friday</p>
                        <p>9am to 5pm</p>
                    </div>
                </div> 
            </div>   

            </div>
    
        </div>
    @endsection    
