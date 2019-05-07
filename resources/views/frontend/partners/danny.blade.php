@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="About">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PARTNERS - DANNY</title>
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
                min-height: 530px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- About -->
    <section class="mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 w-100 header-img respon-3" style="background-image: url('{{ asset('images/salt/partners/partners-danny-header.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
                </div>
            </div>
        </div>    
    </section>

    <section class="bg-0 mb-3">
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
                    <p class="custom-font-monserrat-regular text-black">Danny is Partner of Salt Ventures Indonesia.<br/><br/>
                        Danny carries around 10 years of financial and
                        management work experience. Throughout his
                        professional carreer, Mr Danny has been
                        assigned as a project leader in many corporate
                        actions such as, M&A, debt restructuring,
                        leverage buyout, due diligence, with Enterprise
                        Value ranging from USD 50 million – USD 900
                        million.<br/><br>
                        In a start-up realm, Danny has been trusted to
                        be the financial advisor to numerous growing
                        and prominent early stage
                        companies in the fashion retail, F&B and
                        healthcare industry namely, The Goods Dept,
                        Syah Establishment, Euromedica
                        Group, Sejauh Mata Memandang and many
                        more. Danny has successfully assisted them in</p>
                </div>
                <div class="col-md-4 col-12 text-center text-md-left">
                    <p class="custom-font-monserrat-regular text-black">the early stage financing and business strategy.
                        Mr Danny earned a degree in
                        Economics from The University of Texas at
                        Austin, USA.<br/><br/>
                        Other Current Executive Positions:
                        <ul>
                            <li class="custom-font-monserrat-regular text-black">• Commissioner of PT Hanson Semesta
                                licensed under Bappepti).</li><br/>
                            <li class="custom-font-monserrat-regular text-black">• Commissioner of PT CK Pakan Indonesia
                                (fullfat soya producer and top 10 soybean
                                trader in Indonesia).</li><br/>
                            <li class="custom-font-monserrat-regular text-black">• Commissioner of PT CK Pakan Indonesia
                                (fullfat soya producer and top 10 soybean
                                trader in Indonesia).</li><br/>
                            <li class="custom-font-monserrat-regular text-black">• Director of PT Bintang Putra Alexander (fast
                                growing outsourcing company providing
                                cleaning service staff, security and driver)</li><br/>
                            <li class="custom-font-monserrat-regular text-black">• Director of PT Teknologi Bahana Mega.</li>
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
    <section class= "d-none d-md-block">
        <div class="container">
            <div class="row no-gutters">
                <div class=" col-md-4 col-4">
                    <a href="{{ route('frontend.partners.bong') }}">
                    <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/dannypartnersbong.png') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;">

                    </div>
                    </a>
                </div>    
                <div class="col-md-4 col-4">
                    <a href="{{ route('frontend.partners.andika') }}">
                    <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/dannypartnersandika.png') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;">
                    </div>
                    </a>
                </div>    
                <div class="col-md-4 col-4">
                    <a href="{{ route('frontend.partners.vincentius') }}">
                    <div class="pbox" style="background-image: url('{{ asset('images/salt/partners/dannypartnersvincentius.png') }}');
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