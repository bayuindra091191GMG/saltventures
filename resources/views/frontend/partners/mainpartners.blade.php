@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title> SALT VENTURES - PARTNERS</title>
@endsection

@section('styles')
    <style type="text/css">
        .partners-content{
            padding-bottom: 20%;
            overflow: hidden;
            width: 20%;
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
<section>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-21.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>    
            <div class="col-4 partners-content text-white " style="background-color: green">
                <div class="pl-2 pl-md-5 pt-2 pt-md-5">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Danny Sutradewa</span>
                </div>    
            </div>
            <div class="col-4 partners-content p-4" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-22.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
                <div class="d-none d-md-block">
                    <span class="txt-partners-3 text-white">Danny is Partner of Salt Ventures<br/>
                        Indonesia. Danny carries around 10<br/>
                        years of financial and management<br/>
                        work experience.<br/>
                    </span>
                    <a href="{{ route('frontend.partners.danny') }}" class="btn btn-success px-md-5 py-md-3 mt-3 " style="border-radius: 0;">Read More</a>
                </div>
                <div class="d-block d-md-none pt-4">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <div class="w-100">
                            <a href="#" class="btn btn-success mx-auto px-2" 
                            style="border-radius: 0; font-size: 8px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 partners-content text-white" style="background-color: green">
                <div class="pl-2 pl-md-5 pt-2 pt-md-5">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Bong Chandra</span>
                </div>    
            </div>    
            <div class="col-4 partners-content p-4" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-22.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
                <div class="d-none d-md-block">
                    <span class="txt-partners-3 text-white">Bong Chandra is Partner of Salt<br/>
                        Ventures Indonesia. In 2009, Bong<br/>
                        Chandra accompanied with his three<br/>
                        partners, established a Property<br/>
                        Developer Company named Trinity Land.<br/>
                    </span>
                    <a href="{{ route('frontend.partners.danny') }}" class="btn btn-success px-md-5 py-md-3 mt-3 " style="border-radius: 0;">Read More</a>
                </div>
                <div class="d-block d-md-none pt-4">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <div class="w-100">
                            <a href="#" class="btn btn-success mx-auto px-2" 
                            style="border-radius: 0; font-size: 8px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-24.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-27.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>    
            <div class="col-4 partners-content text-white " style="background-color: green">
                <div class="pl-2 pl-md-5 pt-2 pt-md-5">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Andika Sutoro Putra</span>
                </div>    
            </div>
            <div class="col-4 partners-content p-4" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-22.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
                <div class="d-none d-md-block">
                    <span class="txt-partners-3 text-white">Danny is Partner of Salt Ventures<br/>
                        Indonesia. Danny carries around 10<br/>
                        years of financial and management<br/>
                        work experience.<br/>
                    </span>
                    <a href="{{ route('frontend.partners.danny') }}" class="btn btn-success px-md-5 py-md-3 mt-3 " style="border-radius: 0;">Read More</a>
                </div>
                <div class="d-block d-md-none pt-4">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <div class="w-100">
                            <a href="#" class="btn btn-success mx-auto px-2" 
                            style="border-radius: 0; font-size: 8px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 partners-content p-4" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-22.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
                <div class="d-none d-md-block">
                    <span class="txt-partners-3 text-white">Danny is Partner of Salt Ventures<br/>
                        Indonesia. Danny carries around 10<br/>
                        years of financial and management<br/>
                        work experience.<br/>
                    </span>
                    <a href="{{ route('frontend.partners.danny') }}" class="btn btn-success px-md-5 py-md-3 mt-3 " style="border-radius: 0;">Read More</a>
                </div>
                <div class="d-block d-md-none pt-4">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <div class="w-100">
                            <a href="#" class="btn btn-success mx-auto px-2" 
                            style="border-radius: 0; font-size: 8px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-4 partners-content" style="background-image: url('{{ asset('images/salt/partners/SALT-Website-28.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            </div>
            <div class="col-4 partners-content text-white " style="background-color: green">
                <div class="pl-2 pl-md-5 pt-2 pt-md-5">
                    <span class="txt-partners-1">The Partners</span><br/>
                    <span class="txt-partners-2">Vincentius Prasetio</span>
                </div>    
            </div>
        </div>
    </div>

    </div>
</section>



@endsection