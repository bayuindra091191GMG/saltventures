@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title> SALT VENTURES - PARTNERS</title>
@endsection

@section('styles')
    <style type="text/css">

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

            .centered {
                position: absolute;
                top: 80%;
                left: 70%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (max-width: 992px) {
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
            .partners-content{
                padding-bottom: 25%;
                overflow: hidden;
                width: 20%;
                
            }

            .txt-partners-1{
                font-size: 20px !important;
            }
            .txt-partners-2{
                font-size: 26px !important;
                font-weight: bold;
            }
        }
    </style>
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-21.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>    
            <div class="col-lg-4 col-md-4 col-4 partners-content text-white " style="background-color: green">
                <div class="p-l-30 p-t-30">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2"></span>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-22.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            <div class="p-l-30 p-t-30">
                <span class="txt-partners-1">The Partners</span><br/>
                <span class="txt-partners-2">Danny Sutradewa</span>
            </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content text-white " style="background-color: green">
                <div class="p-l-30 p-t-30">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Bong Chandra</span>
                </div>    
            </div>    
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-23.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-24.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-27.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>    
            <div class="col-lg-4 col-md-4 col-4 partners-content text-white " style="background-color: green">
                <div class="p-l-30 p-t-30">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Andika Sutoro Putra</span>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-26.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-25.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>    
            <div class="col-lg-4 col-md-4 col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-28.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-lg-4 col-md-4 col-4 partners-content text-white " style="background-color: green">
                <div class="p-l-30 p-t-30">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Vincentius Prasetio</span>
                </div>    
            </div>
        </div>
    </div>

    </div>
</section>



@endsection