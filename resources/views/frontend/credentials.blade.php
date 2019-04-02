@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title> SALT VENTURES - CREDENTIALS</title>
@endsection

@section('styles')
    <style type="text/css">
        .partners-content{
            padding-bottom: 20%;
            overflow: hidden;
            width: 20%;
        }
        .brd{
            border: 1px solid black;
        }
        @media (max-width: 576px) {
            .mycontent-left {
                border-right: none;
            }
            .mycontent-right {
                border-left: none;
            }
            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
            .header-img{
                min-height: 150px;
            }
        }

        @media (min-width: 768px) {
            .mycontent-left {
                border-right: none;
            }
            .mycontent-right {
                border-left: none;
            }
            .btn-readmore-responsive {

            }

            .centered {
                position: absolute;
                top: 80%;
                left: 70%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (max-width: 992px) {

            .partners-content{
                padding-bottom: 20%;
                overflow: hidden;
                width: 20%;
                
            }

            .txt-partners-1{
                font-size: 14px !important;
            }
            .txt-partners-2{
                font-size: 16px !important;
                font-weight: bold;
            }
            .txt-partners-3{
                font-size: 10px !important;
            }

        }

        @media (min-width: 1024px) {
            .mycontent-left {
                border-right: 1px solid #333;
                height: 345px;
            }

            .mycontent-right {
                border-left: 1px solid #333;
                height: 100%;
            }

            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }

            .header-img{
                min-height: 300px;
            }

            .txt-partners-1{
                font-size: 20px !important;
            }
            .txt-partners-2{
                font-size: 24px !important;
                font-weight: bold;
            }
            .txt-partners-3{
                font-size: 18px !important;
            }
        }

        @media (min-width: 1200px) {
            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }

            .mycontent-left {
                border-right: 1px solid #333;
                height: 297px;
            }

            .mycontent-right {
                border-left: 1px solid #333;
                height: 100%;
            }

            .header-img{
                min-height: 400px;
            }

            
        }
    </style>
@endsection

@section('content')
<section class="bg-0 p-t-40 p-b-10">
    <div class="container">
            <!-- Title section -->
        <div class="flex-col-c-c p-b-5">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                Credentials
            </h3>
        </div>
    </div>
</section>
<section>
    <div class="container" >
        <div class="row no-gutters">
            <div class="col-md-6" style="background-color: rgb(0,65,0) ;background-image: url('{{ asset('images/salt/credentials/credentials-1.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25%;
                        height: 200px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(0,57,0);background-image: url('{{ asset('images/salt/credentials/credentials-2.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size:40%;
                        height: 200px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(0,57,0);background-image: url('{{ asset('images/salt/credentials/credentials-3.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25%;
                        height: 200px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(0,65,0);background-image: url('{{ asset('images/salt/credentials/credentials-4.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 40%;
                        height: 200px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(0,65,0);background-image: url('{{ asset('images/salt/credentials/credentials-5.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 40%;
                        height: 200px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(0,57,0);background-image: url('{{ asset('images/salt/credentials/credentials-6.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 40%;
                        height: 200px;">
            </div>
        </div>
    </div>
</section>

@endsection