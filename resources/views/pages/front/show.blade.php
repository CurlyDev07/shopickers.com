@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <style>
        
    
    </style>
@endsection

@section('nav')
    @include('pages.includes.top_nav_categories')
@endsection

@section('content')
    <div class="tw-full tmb-32">
        <div class="titems-center tw-full">
            <i class="fas fa-home ttext-gray-500 tmr-5"></i>
            <i class="fas fa-chevron-right ttext-gray-500 ttext-xs tmr-5"></i>
            <span class="ttext-gray-500 ttext-sm">Computer Mouse</span>
        </div><!-- BreadCrumbs -->

        <div class="tflex tw-full tmt-4">
            <div class="tw-5/6">
                <div class="tflex">
                    <div class="tw-2/5 ">
                        <div class="owl-main owl-carousel owl-theme tborder">
                            <div class="item">
                                <img src="https://www.portotheme.com/magento/porto/media/catalog/product/cache/11/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/2/_/2_14_2.jpg" data-hash="one" class="tinline" style="width: 396px;height: 292px;">
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_OYHLjPxwf5I5qIuLgrtlq66u21yBZCKNd4xvZ1TpwqyCXjZK" data-hash="two" class="tinline" style="width: 396px;height: 292px;">
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTl9uc5mDG_Tv1WEd3JTReEWHe5vUoKM7W5nW9MgBdFR4rzXwcF" data-hash="three" class="tinline" style="width: 396px;height: 292px;">
                            </div>
                            <div class="item">
                                <img src="https://www.lg.com/us/images/laptops/md06060216/gallery/01-1100-v1.jpg" data-hash="four" class="tinline" style="width: 396px;height: 292px;">
                            </div>
                            <div class="item">
                                <img src="http://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE2v60k?ver=802f" data-hash="five" class="tinline" style="width: 396px;height: 292px;">
                            </div>
                        </div><!-- MAIN IMAGE -->
                        
                        <div class="owl-small owl-carousel owl-theme tmt-3">
                            <a class="item" href="#one">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYNdnTAoNqQV03YwZdnVTruSxb9SRsI-kmN00bUgNwlleHl6eo" data-hash="one" class="tinline" style="width: 396px;height: auto;">
                            </a>
                            <a class="item" href="#two">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_OYHLjPxwf5I5qIuLgrtlq66u21yBZCKNd4xvZ1TpwqyCXjZK" data-hash="two" class="tinline" style="width: 396px;height: auto;">
                            </a>
                            <a class="item" href="#three">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTl9uc5mDG_Tv1WEd3JTReEWHe5vUoKM7W5nW9MgBdFR4rzXwcF" data-hash="three" class="tinline" style="width: 396px;height: auto;">
                            </a>
                            <a class="item" href="#four">
                                <img src="https://www.lg.com/us/images/laptops/md06060216/gallery/01-1100-v1.jpg" data-hash="four" class="tinline" style="width: 396px;height: auto;">
                            </a>
                            <a class="item" href="#five">
                                <img src="http://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE2v60k?ver=802f" data-hash="five" class="tinline" style="width: 396px;height: auto;">
                            </a>
                        </div><!-- SMALL IMAGE -->
                    </div><!-- LEFT SIDE -->
                    <div class="tw-3/5">
                        <div class="tpx-10">
                            <h2 class="tfont-semibold ttext-3xl ttext-gray-800">Computer Mouse</h2>
                            <div class="tpy-3 tflex tmb-2">
                                <div class="tflex">
                                    <div class="ttext-sm tmr-5">
                                        <i class="fas fa-star ttext-yellow-400"></i> 4.8
                                    </div>
                                    <div class="tborder-gray-400 tborder-l ttext-sm tpl-5">0 Review(s)</div>
                                </div>
                            </div><!-- RATINGS -->
                            <div class="tleading-relaxed tpb-5 tborder-b">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div><!-- SHORT DESCRIPTION -->
                            <div class="tpy-5 tborder-b">
                                <p class="tmb-2">Availability: In stock </p>
                                <div class="tflex titems-center tmt-4">
                                    <span class="tfont-extrabold ttext-2xl ttext-blue-500 tmr-4" style="font-family: arial;" id="price" data-price="500">{{ currency(500) }}</span>
                                    {!! number_spinner_markup() !!}
                                </div>
                            </div><!-- PRICE -->
                            <div class="tpy-8 tflex titems-center tjustify-between">
                                <div class="tflex tmr-5">
                                    <div class="tborder tpx-5 tpy-3 trounded tmr-8">
                                        <i class="fas fa-share-alt ttext-blue-500"></i>
                                    </div>
                                    <div class="tborder tpx-5 tpy-3 trounded">
                                        <i class="fas fa-heart ttext-blue-500"></i>
                                    </div>
                                </div>
                                <a class="tbg-blue-500 focus:tbg-blue-500 hover:tbg-blue-500 waves-effect waves-light tml-5 tpx-12 tpy-3 trounded-b trounded-t ttext-white tw-1/3">Add To Cart</a>
                                <a href="{{ route('checkout') }}" class="tbg-blue-500 focus:tbg-blue-500 hover:tbg-blue-500 waves-effect waves-light tml-5 tpx-12 tpy-3 trounded-b trounded-t ttext-white tw-1/3 ttext-center">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- MIDDLE SIDE -->
                </div>
                <div class="tflex tflex-col">
                    <div class="tw-full">
                        <ul class="tabs">
                            <li class="tab col s3 tfont-medium"><a href="#description">OVERVIEW</a></li>
                            <li class="tab col s3 tfont-medium"><a href="#ratingsAndReviews">CUSTOMER REVIEWS</a></li>
                            <li class="tab col s3 tfont-medium"><a href="#specifications" class="active">SPECIFICATIONS</a></li>
                        </ul>
                    </div><!-- TABS -->
                    <div id="description" class="tw-full tborder tpy-5 tpx-4">
                        <div class="tflex tflex-wrap">
                            cheap so please better make sure to CHECK the ordered items. Hope you could solve this concern of mine
                            <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                            <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                            <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                            <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                            <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                        </div>
                    </div><!-- OVERVIEW -->
                    <div id="ratingsAndReviews" class="tw-full tpy-5 tpx-4">
                        <div class="tfont-medium tmb-3">CUSTOMER REVIEWS (204)</div>
                        <div class="tflex">
                            <div class="tw-2/5">
                                <div class="tflex titems-center tmb-3">
                                    <div class="ttext-sm tw-16 tmr-5">5 Stars</div>
                                    <div class="progress tm-0 tbg-blue-300">
                                        <div class="determinate" style="width: 70%; background-color: #4299e1;"></div>
                                    </div>
                                    <div class="tborder tml-5 trounded ttext-black ttext-center ttext-sm tw-1/5 tw-16 tborder-gray-500">87%</div>
                                </div>
                                <div class="tflex titems-center tmb-3">
                                    <div class="ttext-sm tw-16 tmr-5">4 Stars</div>
                                    <div class="progress tm-0 tbg-blue-300">
                                        <div class="determinate" style="width: 9%; background-color: #4299e1;"></div>
                                    </div>
                                    <div class="tborder tml-5 trounded ttext-black ttext-center ttext-sm tw-1/5 tw-16 tborder-gray-500">9%</div>
                                </div>
                                <div class="tflex titems-center tmb-3">
                                    <div class="ttext-sm tw-16 tmr-5">3 Stars</div>
                                    <div class="progress tm-0 tbg-blue-300">
                                        <div class="determinate" style="width: 2%; background-color: #4299e1;"></div>
                                    </div>
                                    <div class="tborder tml-5 trounded ttext-black ttext-center ttext-sm tw-1/5 tw-16 tborder-gray-500">2%</div>
                                </div>
                                <div class="tflex titems-center tmb-3">
                                    <div class="ttext-sm tw-16 tmr-5">2 Stars</div>
                                    <div class="progress tm-0 tbg-blue-300">
                                        <div class="determinate" style="width: 1%; background-color: #4299e1;"></div>
                                    </div>
                                    <div class="tborder tml-5 trounded ttext-black ttext-center ttext-sm tw-1/5 tw-16 tborder-gray-500">1%</div>
                                </div>
                                <div class="tflex titems-center tmb-3">
                                    <div class="ttext-sm tw-16 tmr-5">1 Stars</div>
                                    <div class="progress tm-0 tbg-blue-300">
                                        <div class="determinate" style="width: 1%; background-color: #4299e1;"></div>
                                    </div>
                                    <div class="tborder tml-5 trounded ttext-black ttext-center ttext-sm tw-1/5 tw-16 tborder-gray-500">1%</div>
                                </div>
                            </div>
                            <div class="tw-3/5 tflex  tjustify-center">
                                <div class="tflex titems-center">
                                    <div class="ttext-blue-500"><b class="ttext-5xl">4.8</b> <small class="tmr-4"> / 5</small></div>
                                    <div class="">
                                        <i class="fas fa-star ttext-blue-500"></i>
                                        <i class="fas fa-star ttext-blue-500"></i>
                                        <i class="fas fa-star ttext-blue-500"></i>
                                        <i class="fas fa-star ttext-blue-500"></i>
                                        <i class="fas fa-star ttext-blue-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ([1,2,3] as $item)
                            <div class="tflex">
                                <div class="tw-full tflex tborder-b tpy-4">
                                    <div class="tw-1/12">
                                        <img src="https://cf.shopee.ph/file/72c47a2917ec8014f7b8018a6c96bb28_tn" class="trounded-full" width="60px" alt="">
                                    </div>
                                    <div class="tw-11/12">
                                        <div class="tflex tjustify-between">
                                            <div class="tw-3/5 tflex tflex-col">
                                                <div class="ttext-sm">rklamata</div>
                                                <div class=""><small><b>4.5</b></small><i class="fas fa-star ttext-blue-500 tml-1"></i></div>
                                                <div class="ttext-md ttext-gray-400">Variation: Grey - US:9</div>
                                            </div>
                                            <div class="tw-2/5 tflex tjustify-end titems-center">
                                                <div class="ttext-sm ttext-center tmr-2 ttext-gray-900">Helpful?</div>
                                                <button class="tborder tborder-gray-500 tmr-2 tpx-3 tpy-1 ttext-gray-900 trounded ttext-sm waves tmr-2">Yes (0)</button>
                                                <button class="tborder tborder-gray-500 tmr-2 tpx-3 tpy-1 ttext-gray-900 trounded ttext-sm waves">No (0)</button>
                                            </div>
                                        </div>
                                        <div class="tmt-3">
                                            maganda ang quality, magaan lang sa paa, mabilis ang delivery, medyo malaki nga lang sakin kasi wala ng yung size ko, pero pwede na din... order ulit ako, pero sana next time meron ng stocks, hindi puro cancel., thanks seller! 😇
                                        </div>
                                    </div>
                                </div>
                            </div><!-- CUSTOMER REVIEWS PREVIEW-->
                        @endforeach
                    </div><!-- RATINGS & REVIEWS -->
                    <div id="specifications" class="tw-full tpy-5 tpx-4">
                        <div class="tflex tflex-wrap">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="tw-6/12 tmb-2"><span class="ttext-gray-500 tmr-2">Brand Name:</span>Samsung</div>
                                <div class="tw-6/12 tmb-2"><span class="ttext-gray-500 tmr-2">Phone Type:</span>Smart Phones</div>
                                <div class="tw-6/12 tmb-2"><span class="ttext-gray-500 tmr-2">Display Resolution: </span>2960x1440</div>
                                <div class="tw-6/12 tmb-2"><span class="ttext-gray-500 tmr-2">Biometrics Technology:</span>Fingerprint Recognition</div>
                            @endfor
                        </div>
                    </div><!-- SPECIFICATIONS -->
                </div><!-- TABS -->
            </div>
            <div class="tw-1/6">
                <div class="tflex tflex-wrap">
                    <div class="tborder-b tflex titems-center tjustify-center tmb-5 tpb-5 tw-full">
                        <i class="fas fa-shipping-fast fa-2x ttext-blue-700"></i>
                        <div class="tml-4 tpt-6">
                            <h3 class="ttext-sm tfont-semibold">FREE SHIPPING</h3>
                            <p class="ttext-sm ttext-gray-600">Free shipping on all orders over $99.</p>
                        </div>
                    </div>
                    <div class="tborder-b tflex titems-center tjustify-center tmb-5 tpb-5 tw-full">
                        <i class="fas fa-dollar-sign fa-2x ttext-blue-700"></i>
                        <div class="tml-4">
                            <h3 class="ttext-sm tfont-semibold">MONEY BACK GUARANTEE</h3>
                            <p class="ttext-sm ttext-gray-600">100% money back guarantee.</p>
                        </div>
                    </div>
                    <div class="tborder-b tflex titems-center tjustify-center tmb-5 tpb-5 tw-full">
                        <i class="fas fa-headset fa-2x ttext-blue-700"></i>
                        <div class="tml-4">
                            <h3 class="ttext-sm tfont-semibold">ONLINE SUPPORT 24/7</h3>
                            <p class="ttext-sm ttext-gray-600">24 hours customer support.</p>
                        </div>
                    </div>
                </div>
            </div><!-- RIGHT SIDE -->
        </div>
    </div>

@endsection

@section('js')
    {!! number_spinner_js() !!}

    <script>
        $(document).ready(function(){
            $('.tabs').tabs();
        });

        $('.qty_min').click(function(){
            var qty = parseInt($(this).next().val()) - 1;
            
            if (qty+1 == 1) {
                return;
            }
            var base_price = parseInt($('#price').data('price'));
            var static_price = $('#price').text();
            var total = parseInt(base_price * qty);
            $('#price').html('$'+total);
        });

        $('.qty_add').click(function(){
            var base_price = parseInt($('#price').data('price'));
            var static_price = $('#price').text();
            var qty = parseInt($(this).prev().val()) + 1;
            var total = parseInt(base_price * qty);

            $('#price').html('$'+total);
        });

        var main_image = $('.owl-main').owlCarousel({
            items:1,
            loop:false,
            center:true,
            margin:10,
            dots: false,
            animateOut: 'fadeOut',
            URLhashListener:true,
            autoplayHoverPause:true,
            startPosition: 'URLHash'
        }); // MAIN IMAGE

        var small_image = $('.owl-small').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:5
        })

    </script>
@endsection