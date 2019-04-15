@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>SALT VENTURES</title>
@endsection

@section('content')

    <!-- Banner -->

    <section class="slider mb-3">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="slidingoverlayhorizontal">
                        <img src="{{ asset('images/salt/home/home-1.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg" style="height: 500px;">

                        {{--<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" --}}
                        {{--data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                        {{--data-visibility="['on', 'on', 'on', 'on']"--}}
 {{----}}
                        {{--data-fontsize="['48', '48', '48', '38']" --}}
                        {{--data-lineheight="['58', '58', '58', '58']"--}}
                        {{--data-color="['#FFF']" --}}
                        {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                     {{----}}
                        {{--data-x="['center']" --}}
                        {{--data-y="['center']" --}}
                        {{--data-hoffset="['0', '0', '0', '0']" --}}
                        {{--data-voffset="['-83', '-83', '-83', '-93']" --}}
                     {{----}}
                        {{--data-width="['1200','992','768','480']"--}}
                        {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                        {{--data-whitespace="['normal']" --}}
                     {{----}}
                        {{--data-paddingtop="[0, 0, 0, 0]"--}}
                        {{--data-paddingright="[15, 15, 15, 15]"--}}
                        {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                        {{--data-paddingleft="[15, 15, 15, 15]"--}}

                        {{--data-basealign="slide" --}}
                        {{--data-responsive_offset="off"--}}
                        {{-->BEGIN YOUR CHAPTER</h2>--}}

                        <p class="tp-caption tp-resizeme caption-2" 
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"
 
                        data-fontsize="['30', '30', '30', '25']" 
                        data-lineheight="['39', '39', '39', '39']"
                        data-color="['#FFF']" 
                        data-textAlign="['center', 'center', 'center', 'center']"
                     
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['-13', '-13', '-13', '-13']" 
                     
                        data-width="['1200','992','768','480']"
                        data-height="['auto', 'auto', 'auto', 'auto']" 
                        data-whitespace="['normal']" 
                     
                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide" 
                        data-responsive_offset="off"
                        >
                            <span class="t1-b-1 custom-font-monserrat-bold">"We are</span><br/>
                            <span class="t1-b-1 custom-font-monserrat-bold">partners of</span><br/>
                            <span class="t1-b-1 custom-font-monserrat-bold color-custom-dark-green">extra mile walkers."</span>
                        </p>
                    </li>
                </ul>				
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-12">
                    <hr class="mx-auto w-50" style="border-color: #000000;"/>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>

    <!-- DEAR FOUNDERS Section -->
    <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row mb-5 mb-md-4">
                <div class="col-12 text-center">
                    <h2 class="t1-b-1 text-dark"><em>Dear Founders,</em></h2>
                    <h2 class="t1-b-1 text-dark"><em>Big Dreamers & Extra Mile Walkers,</em></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-4 col-12 text-center text-md-left">
                    <p style="line-height: 1.8;">Salt Ventures is an Indonesian based venture
                        capital firm established with a focus to invest in
                        and help to cultivate the impactful early to
                        growth stage companies in Indonesia’s growing
                        market. We believe for a company to thrive and
                        win in this competitive market, it needs to be</p>
                    <br/>
                </div>
                <div class="col-md-4 col-12 text-center text-md-left">
                    <p style="line-height: 1.8;">either technology driven and/or efficiently run
                        operated by a value-driven and highly
                        motivated management team. When we
                        invest, our frame of mind is not as an investor.
                        We consider ourselves partners of the
                        founders, big dreamer, extra mile walker.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-12">
                    <hr class="mx-auto w-50" style="border-color: #000000;"/>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <div class="w-100 bg-dear-founder-responsive" style="background-image: url('{{ asset('images/salt/home/home-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-3 py-4" style="background-color: #eceff4;">
        <div class="container">
            <!--  -->
            <div class="row mb-4 mt-4">
                <div class="col-12 text-center">
                    <span class="t1-b-1 custom-font-monserrat-bold text-black">Our Creative </span>
                    <span class="t1-b-1 custom-font-monserrat-bold color-custom-dark-green">Ecosystem</span>
                </div>
            </div>
            <div class="row mb-4">
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
                    <a href="{{ route('frontend.ecosystem') }}" class="btn btn-success px-5 py-3" style="border-radius: 0;">Read More</a>
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
                <div class="col-md-6 col-12 pt-5">
                    <div class="row mt-4 mb-4">
                        <div class="col-12 text-center text-md-left">
                            <span class="t1-b-1 custom-font-monserrat-bold text-black">Our </span>
                            <span class="t1-b-1 custom-font-monserrat-bold color-custom-dark-green">Approach</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 text-center text-md-left">
                            <p style="line-height: 1.8;">
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
                            <a href="{{ route('frontend.ourway') }}" class="btn btn-success px-5 py-3 custom-font-monserrat-semibold" style="border-radius: 0;">Read More</a>
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
                            <span class="t1-b-1 text-white custom-font-monserrat-bold">Partners</span>
                            <a href="{{ route('frontend.partners.mainpartners') }}" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark custom-font-monserrat-semibold" style="border-radius: 0; background-color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="w-100 bg-approach-2-responsive" style="background-image: url('{{ asset('images/salt/home/home-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-1 text-white custom-font-monserrat-bold">Credentials</span>
                            <a href="{{ route('frontend.credentials') }}" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark custom-font-monserrat-semibold" style="border-radius: 0; background-color: #fff;">Read More</a>
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
        .img-banner-responsive{
            height: 500px;
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
            .img-banner-responsive{
                height: 550px;
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