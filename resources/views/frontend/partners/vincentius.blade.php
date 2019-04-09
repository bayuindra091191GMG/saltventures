@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PARTNERS - VINCENTIUS</title>
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
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img w-100" style="background-image: url('{{ asset('images/salt/partners/partners-vincentius-header.png') }}');"></div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3"></div>
            </div>
        </div>    
    </section>

    <section class="mb-3">
            <div class="container">
                <!--  -->
                <div class="row justify-content-center">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 col-12 text-center text-md-left">
                            <p class="custom-font-monserrat-regular text-black"> Vincentius is a Partner of Salt Ventures
                                Indonesia.<br/><br/>
                                Vincent, a certified Management Accountant
                                and a CFA Candidate , carries around 14 years of
                                financial and leadership experience.
                                Throughout his career, he had been able to help
                                to raise approx USD 60 million through Initial
                                Public Offering in IDX for a transportation
                                company called PT Express Transindo Utama
                                (Express Group) with ticker “TAXI” ; and close
                                USD 22.5 million B round financing in Canada
                                for a telecommunication company called
                                Zeugma Systems Inc.
                            </p>
                        <br/>
                    </div>
                    <div class="col-md-4 col-12 text-center text-md-left">
                        <p class="custom-font-monserrat-regular text-black">     In Private Equity and other leadership realms,
                                Vincent had also been able to close a private
                                deal; a Joint Venture for Indonesia Exclusive
                                Bike Distributions rights in Indonesia for “Trek”
                                and also implement various operational
                                efficiency procedures through oil Hedging
                                program; Working Capital Analysis; Process
                                workflow and also good corporate
                                Governance. Vincent earned a Business
                                degree from Simon Fraser University, British
                                Columbia, USA.<br/><br/>
                                Other Current Executive Position:<br/>
                                <ul>
                                    <li>• General Manager in PT Prima Usaha
                                        Nasional.</li>
                                    <li>• General Manager in PT Oaktech
                                        Nusantara.</li>
                                </ul>    
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
    <section class = "d-none d-md-block">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.danny') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/vincentiuspartnersdanny.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.bong') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/vincentiuspartnersbong.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.andika') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/vincentiuspartnersandika.png') }}');
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