@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>SALT VENTURES - ECOSYSTEM</title>
@endsection

@section('content')

    <!-- OUR CREATIVE ECOSYSTEM Section -->
    <section class="mb-5">
        <div class="container">
            <!--  -->
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <span class="t1-b-1 custom-font-1 font-weight-bold">Our Creative </span>
                    <span class="t1-b-1 custom-font-1 font-weight-bold color-custom-dark-green">Ecosystem</span>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="w-100 img-ecosystem-banner-responsive" style="background-image: url('{{ asset('images/salt/ecosystem/ecosystem-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-12 text-center">
                    <p>SALT Ventures is focusing on building ecosystem in
                        creative industry. Building a synergistic ecosystem in
                        which, each of the companies can benefit and have
                        leverage within this creative ecosystem.</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

    <!-- RETAILERS Section -->
    <section class="mb-3">
        <div class="container">
            <div class="row mb-2 mb-md-4">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/salt/ecosystem/ecosystem-2.png') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;"></div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-12 text-center retailer-description">
                    <span class="t1-m-1 custom-font-1 font-weight-bold">To Leverange, To Synergize, To Grow, To Survive</span>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style>
        .img-ecosystem-banner-responsive{
            height: 200px;
        }

        .retailer-description .t1-m-1{
            font-size: 14px;
            color: black;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-ecosystem-banner-responsive{
                height: 300px;
            }

            .retailer-description .t1-m-1{
                font-size: 18px;
            }
        }

        @media (min-width: 992px) {
            .img-ecosystem-banner-responsive{
                height: 400px;
                color: black;
            }
        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection

@section('scripts')

@endsection