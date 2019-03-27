@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PARTNERS - ANDIKA</title>
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
            <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/salt/partners/partners-andika-header.png') }}');"></div>
        </section>
        <section class="bg-0 p-t-30 p-b-20 d-none d-md-block">
                <div class="container">
                    <div class="flex-col-c-c p-b-20">
                        <div class="size-a-2 bg-3"></div>
                    </div>
                </div>
        </section>
    
            <section class="bg-0 p-t-40 p-b-30 d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-md-4 col-lg-4 mycontent-left">
                                <div class="flex-col-c-c pos-relative">
                                    <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                                        
                                    </div>
            
                                    <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                                            Andika Sutoro Putra is is Partner of Salt
                                            Ventures Indonesia.<br/><br/>
                                            Andika also the CEO of Putra Partners Financial
                                            Service, nine years experienced investor, and
                                            visionary in the field of investment. From 2011 to
                                            2017, Putra has successfully generated 1200%
                                            fantastic return for his private investor,
                                            compared to the IHSG performance. Putra is
                                            also a founder of Putra Investor School. Only in
                                            one year since its establishment, Putra Investor
                                            School brings out more than 300 investor
                                            alumnis. In 2018, Putra composed a best-selling
                                            book entitled ‘Anak Muda Miliarder Saham’.<br/><br/>
                                            Putra is one of the investors of Passpod
                                            Company, a listed company since 2018. At the
                                            first offering, Passpod gained oversubcription
                                            for IDR 500 billion. In 2019, Putra became a
                                            founder and director of Salt Ventures
                                            Indonesia.
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="flex-col-c-c pos-relative">
                                    <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                                        
                                    </div>
            
                                    <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                                            Salt Ventures Indonesia is a venture capital
                                            company focusing on investment and
                                            development of start-up companies.
                                            Putra has been featured in several medias,
                                            such as CNBC, SWA Magazine, Detik, Investor
                                            Daily, Beritasatu, and Indopos.<br/><br/>
                                            Other current executive positions :<br/>
                                            <ul>
                                                <li>Co-founder and CEO of NuMoney
                                                    Exchange (Cryptocurrency Exchange).</li>
                                                <li>Founder and CEO of Landx (Property
                                                    Crowdfunding Platform).</li>
                                                <li>Director of Snapinn
                                                    (Accomodation Rent Service)</li>
                                                <li>Director of Mentorgue (Micro-learning App).</li>
                                            </ul><br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    <section class="bg-0 p-t-30 p-b-20 d-none d-md-block">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3"></div>
            </div>
        </div>    
    </section>
    <section>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.bong') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/andikapartnersbong.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.danny') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/andikapartnersdanny.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        </div>
                        </a>
                    </div>    
                    <div class="col-lg-4 col-md-4 col-4">
                        <a href="{{ route('frontend.partners.vincentius') }}">
                        <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/andikapartnersvincentius.png') }}');
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