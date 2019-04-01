@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PARTNERS - BONG</title>
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
        }
    </style>
@endsection

@section('content')
    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="container">
            <div class="row w-100">    
                <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/salt/partners/partners-bong-header.png') }}');"></div>
            </div>
        </div>    
    </section>


    <section class="bg-0 p-t-30 p-b-20">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3"></div>
            </div>
        </div>
    </section>
    
            {{-- <section class="bg-0 p-t-40 p-b-30 d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-md-4 col-lg-4 mycontent-left">
                                <div class="flex-col-c-c pos-relative">
                                    <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                                        
                                    </div>
            
                                    <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                                            Bong Chandra is Partner of Salt Ventures
                                            Indonesia.<br/><br/>
                                            In 2009, Bong Chandra—accompanied with his
                                            three partners, Matius Jusuf, Septian Starlin and
                                            Johannes L.A., established a Property Developer
                                            Company named Triniti Land. In the last 10
                                            years, Triniti Land has successfully developed
                                            iconic property projects, such as Brooklyn
                                            Apartment, Springwood Residence, Yukata
                                            Suites, The Smith, Collins Boulevard, and Marcs
                                            Boulevard which are worth more than IDR 15
                                            trillion. Triniti Land plans to perform Initial
                                            Public Offering (IPO) on July 2019.
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="flex-col-c-c pos-relative">
                                    <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                                        
                                    </div>
            
                                    <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                                            Bong Chandra is also one of the founders of
                                            Snapinn. Snapinn is a marketplace which
                                            provide accomodations from Private
                                            Residences and Apartments, to Villas. Snapinn
                                            has advance feature, such as Snaptrip, 
                                            so everyone can be a host to provide local trips
                                            and experiences based on their own expertises.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section> --}}
    <section class="mb-3">
            <div class="container">
                <!--  -->
                <div class="row justify-content-center">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 col-12 text-center text-md-left">
                            <p> Bong Chandra is Partner of Salt Ventures
                                Indonesia.<br/><br/>
                                In 2009, Bong Chandra—accompanied with his
                                three partners, Matius Jusuf, Septian Starlin and
                                Johannes L.A., established a Property Developer
                                Company named Triniti Land. In the last 10
                                years, Triniti Land has successfully developed
                                iconic property projects, such as Brooklyn
                                Apartment, Springwood Residence, Yukata
                                Suites, The Smith, Collins Boulevard, and Marcs
                                Boulevard which are worth more than IDR 15
                                trillion. Triniti Land plans to perform Initial
                                Public Offering (IPO) on July 2019.
                            </p>
                        <br/>
                    </div>
                    <div class="col-md-4 col-12 text-center text-md-left">
                            <p> Bong Chandra is also one of the founders of
                                Snapinn. Snapinn is a marketplace which
                                provide accomodations from Private
                                Residences and Apartments, to Villas. Snapinn
                                has advance feature, such as Snaptrip, 
                                so everyone can be a host to provide local trips
                                and experiences based on their own expertises.   
                            </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
    </section>
    <section class="bg-0 p-t-20 p-b-20 d-none d-md-block">
            <div class="container">
                <div class="flex-col-c-c p-b-20">
                    <div class="size-a-2 bg-3"></div>
                </div>
            </div>
    </section>
    <section class= "d-none d-md-block">
            <div class="container">
                <div class="row no-gutters ">
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.danny') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/bongpartnersdanny.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.andika') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/bongpartnersandika.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.vincentius') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/bongpartnersvincentius.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>       
                </div>    
            </div>
    </section>
@endsection