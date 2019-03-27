@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Our Way Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>SALT VENTURES - OUR WAY</title>
@endsection

@section('content')

    <!-- OUR APPROACH BANNER Section -->
    <section class="mb-5">
        <div class="container-fluid">
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/salt/ourway/ourway-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 300px">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-3 font-weight-bold text-white custom-font-1">Our</span>
                            <span class="t1-b-3 font-weight-bold color-custom-dark-green custom-font-1">Approach</span>
                            <span class="t1-m-1 text-white"><em>“Core Management, Technology Driven, Cost Efficient”</em></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR APPROACH Section -->
    <section class="mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 text-center">
                    <p>When finding and analysing a company, first we look at the founder and its core management team.
                        We partner with founders and management teams that have excellent synergy and teamwork over
                        showmanship, ability to transform ideas into actions, continuous learning spirit, tremendous tenacity
                        and winning attitude.</p>
                    <br/>
                    <p class="color-custom-dark-green">
                        In a company that we invest, we seek for one or both of these characteristics:<br/>
                        * Technology Driven<br/>
                        * Cost Efficient
                    </p>
                    <br/>
                    <p>It has been proven overtime, that companies with either technology driven and/or efficiently run, are
                        companies that can thrive and win in the short and long run. Thus, when we analyse a company, we
                        intensely focus on its ability to scale and generate profit.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- OUR INVESTMENT BANNER Section -->
    <section class="mb-4">
        <div class="container-fluid">
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/salt/ourway/ourway-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 300px">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-3 font-weight-bold text-white custom-font-1">Our Investment</span>
                            <span class="t1-b-3 font-weight-bold color-custom-dark-green custom-font-1">Approach</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR INVESTMENT Section -->
    <section class="mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-12 border-left-investment text-center">
                    <div class="mx-3 mx-md-0 pt-3 border-top-investment">
                        <p>We are dedicated to assist the growth of the
                            company by filling the skills and abilities gap
                            where the company is lacking. If required, we will
                            take roles as a director and/or commissioner to
                            directly involve in the company.</p>
                    </div>
                </div>
                <div class="col-md-3 col-12 border-left-investment text-center">
                    <div class="mx-3 mx-md-0 pt-3 border-top-investment">
                        <p>We have tremendous
                            experiences to structure
                            investment that provides
                            lower risk with greater
                            return than the average
                            market investment return.</p>
                    </div>
                </div>
                <div class="col-md-3 col-12 border-left-investment text-center">
                    <div class="mx-3 mx-md-0 pt-3 border-top-investment">
                        <p>We provide incentivise targets
                            for the founders and its core
                            management teams to
                            achieve in order to maximize
                            the companies’ potential to
                            scale up and grow.</p>
                    </div>
                </div>
                <div class="col-md-3 col-12 border-left-investment border-right-investment text-center">
                    <div class="mx-3 mx-md-0 pt-3 border-top-investment border-bottom-investment">
                        <p>If required, we will assist to
                            transform the financial,
                            accounting and
                            operational aspects of the
                            company in order to
                            achieve efficiency and
                            effectiveness in running
                            the company.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mb-3 py-3" style="background-color: #eceff4;">
        <div class="container">
            <!--  -->
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <span class="t1-b-1 font-weight-bold">Our Creative </span>
                    <span class="t1-b-1 font-weight-bold color-custom-dark-green">Ecosystem</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-12 text-center">
                    <p>
                        “SALT Ventures is focusing on building ecosystem in
                        creative industry. Building a synergistic ecosystem in
                        which, each of the companies can benefit and have
                        leverage within this creative ecosystem.”
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-success px-5 py-3" style="border-radius: 0;">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row mb-4">
                <div class="col-md-6 col-12">
                    <div class="w-100 bg-approach-1-responsive" style="background-image: url('{{ asset('images/salt/home/home-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;"></div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row mt-4 mb-4">
                        <div class="col-12 text-center text-md-left">
                            <span class="t1-b-1 font-weight-bold">Our </span>
                            <span class="t1-b-1 font-weight-bold color-custom-dark-green">Approach</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 text-center text-md-left">
                            <p>
                                When finding and analysing a company, first we
                                look at the founder and its core management
                                team. We partner with founders and management
                                teams that have excellent synergy and teamwork
                                over showmanship, ability to transform ideas into
                                actions, continuous learning spirit, tremendous
                                tenacity and winning attitude.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-center text-md-left">
                            <a href="#" class="btn btn-success px-5 py-3" style="border-radius: 0;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 col-12 mb-3 mb-md-0">
                    <div class="w-100 bg-approach-2-responsive" style="background-image: url('{{ asset('images/salt/home/home-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-1 text-white custom-font-1">Partners</span>
                            <a href="#" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark font-weight-bold" style="border-radius: 0; background-color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="w-100 bg-approach-2-responsive" style="background-image: url('{{ asset('images/salt/home/home-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-1 text-white custom-font-1">Credentials</span>
                            <a href="#" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark font-weight-bold" style="border-radius: 0; background-color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style>
        .border-left-investment{
            border-left: 0;
        }

        .border-right-investment{
            border-right: 0;
        }

        .border-top-investment{
            border-top: 1px solid black;
        }

        .border-bottom-investment{
            border-top: 1px solid black;
        }

        .bg-dear-founder-responsive{
            height: 220px;
        }

        .bg-approach-1-responsive{
            height: 300px;
        }

        .bg-approach-2-responsive{
            height: 200px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .border-left-investment{
                border-left: 1px solid black;
            }

            .border-right-investment{
                border-right: 1px solid black;
            }

            .border-top-investment{
                border-top: 0;
            }

            .border-bottom-investment{
                border-bottom: 0;
            }

            .bg-approach-1-responsive{
                height: 400px;
            }

            .bg-approach-2-responsive{
                height: 400px;
            }

            .bg-dear-founder-responsive{
                height: 480px;
            }
        }

        @media (min-width: 992px) {

        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $('.slider-within').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
    </script>
@endsection