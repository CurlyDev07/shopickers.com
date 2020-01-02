@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <style>
        h2#swal2-title {
            font-size: 22px;
        }
    </style>
@endsection

@section('content')

    <div class="tcontainer tpy-8">
        <div class="tflex tw-full tbg-white tp-5">
            <div class="tw-2/5">
                <div class="owl-main owl-carousel owl-theme">
                    @foreach ($product['images'] as $item)
                        <div class="item">
                            <img src="{{ $item['img'] }}" data-hash="{{ $item['id'] }}" class="tblock tmx-auto" style="width: 396px;height: 292px;">
                        </div>
                    @endforeach
                </div><!-- MAIN IMAGE -->
                <div class="owl-small owl-carousel owl-theme tmt-3">
                    @foreach ($product['images'] as $item)
                        <a class="item" href="#{{ $item['id'] }}">
                            <img src="{{ $item['img'] }}" data-hash="{{ $item['id'] }}" class="tinline" style="width: 396px;height: auto;">
                        </a>
                    @endforeach
                </div><!-- SMALL IMAGE -->
                <ul class="tflex tmt-8">
                    <li class="tmr-4">
                        <a href="#"><i class="fab fa-facebook fa-3x ttext-blue-600"></i></a>
                    </li>
                    <li class="tmr-4">
                        <a href="#"><i class="fab fa-google-plus-square fa-3x ttext-red-600"></i></a>
                    </li>
                    <li class="tmr-4">
                        <a href="#"><i class="fab fa-twitter-square fa-3x ttext-blue-500"></i></a>
                    </li>
                    <li class="">
                        <a href="#"><i class="fab fa-instagram fa-3x ttext-pink-500"></i></a>
                    </li>
                </ul>
            </div><!-- IMAGES -->
            <div class="tw-3/5">
                <div class="tpl-10">
                    <h2 class="tfont-medium tleading-tight ttext-gray-800 ttext-xl">{{ $product['title'] }}</h2>
                    <div class="tflex tjustify-end tpy-3 ttext-md">
                        <div class="tmr-5 ttext-primary">
                            <i class="fas fa-star"></i>
                            <span class="tunderline">4.8</span>
                        </div>
                        <div class="tborder-gray-400 tborder-l  tpx-5">182 Ratings</div>
                        <div class="tborder-gray-400 tborder-l  tpl-5">336 Sold</div>
                    </div><!-- RATINGS -->
                    <div class="tleading-relaxed tpb-5 tborder-b">
                        {!! nl2br($product['short_description']) !!}
                    </div><!-- SHORT DESCRIPTION -->
                    <div class="tpb-5 tborder-b">
                        <div class="tflex tflex-col tmt-4">
                            <span class="tfont-extrabold ttext-2xl ttext-primary tmr-4" style="font-family: arial;" id="price" data-price="500">{{ (currency($product['price'])) }}</span>
                            @if ($product['compare_price'] != '')
                                <div class="">
                                    <span class="tline-through ttext-gray-500">{{ currency($product['compare_price']) }}</span>
                                    <span class="tbg-primary tfont-medium tpx-2 ttext-white">-{{ percentage_discount($product['compare_price'], $product['price']) }}% OFF</span>
                                </div>
                            @endif
                        </div>
                    </div><!-- PRICE -->
                    <div class="">
                        <p class="tmb-3 tpt-3">Availability: In stock </p>
                        <div class="tflex titems-center">
                            {!! number_spinner_markup() !!}
                            <div class="ttext-sm ttext-gray-500 tml-4">Only 1 items left</div>
                        </div>
                    </div>
                    <div class="tpy-8 tflex titems-center tjustify-between">
                        <div class="tflex">
                            <div class="tborder tpx-5 tpy-3 trounded tmr-4">
                                <i class="fas fa-share-alt ttext-primary"></i>
                            </div>
                            <div class="tborder tpx-5 tpy-3 trounded">
                                <i class="fas fa-heart ttext-primary"></i>
                            </div>
                        </div>
                        <a id="add_to_cart" data-id="{{ $product['id'] }}" class="focus:tbg-primary tbg-blue-100 tborder tborder-primary tpy-3 trounded-b trounded-t ttext-primary ttext-center tw-1/3 waves-effect waves-light">Add To Cart</a>
                        <a id="checkout" data-id="{{ $product['id'] }}" class="tborder tborder-primary focus:tbg-primary hover:tbg-primary tbg-primary tpy-3 trounded-b trounded-t ttext-center ttext-white tw-1/3 waves-effect waves-light">Buy Now</a>
                    </div>
                </div>    
            </div><!-- DETAILS -->
        
        </div>
        <div class="tflex tflex-col tmt-8">
            <div class="tw-full tbg-white">
                <ul class="tabs">
                    <li class="tab col s3 tfont-medium"><a href="#description">OVERVIEW</a></li>
                    <li class="tab col s3 tfont-medium"><a href="#ratingsAndReviews">CUSTOMER REVIEWS</a></li>
                    <li class="tab col s3 tfont-medium"><a href="#specifications" class="active">SPECIFICATIONS</a></li>
                </ul>
            </div><!-- TABS -->
            <div id="description" class="tbg-white tw-full tpy-5 tpx-4">
                <div class="tflex tflex-wrap">
                    <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                    <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                    <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                    <img src="http://ae01.alicdn.com/kf/HTB1Sv0NaRr0gK0jSZFnq6zRRXXaM.jpg" alt="">
                </div>
            </div><!-- OVERVIEW -->
            <div id="ratingsAndReviews" class="tbg-white tw-full tpy-5 tpx-4">
                <div class="tfont-medium tmb-3">CUSTOMER REVIEWS (204)</div>
                <div class="tflex">
                    <div class="tw-2/5">
                        <div class="tflex titems-center tmb-3">
                            <div class="ttext-sm tw-16 tmr-5">5 Stars</div>
                            <div class="progress tm-0">
                                <div class="determinate" style="width: 70%;"></div>
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
                            <div class="ttext-primary"><b class="ttext-5xl">4.8</b> <small class="tmr-4"> / 5</small></div>
                            <div class="">
                                <i class="fas fa-star ttext-primary"></i>
                                <i class="fas fa-star ttext-primary"></i>
                                <i class="fas fa-star ttext-primary"></i>
                                <i class="fas fa-star ttext-primary"></i>
                                <i class="fas fa-star ttext-primary"></i>
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
                                        <div class=""><small><b>4.5</b></small><i class="fas fa-star ttext-primary tml-1"></i></div>
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
            <div id="specifications" class="tbg-white tw-full tpy-5 tpx-4">
                <div class="tcontainer">
                    {!! $product['description'] !!}
                </div>
            </div><!-- SPECIFICATIONS -->
        </div><!-- TABS -->
    </div>

@endsection

@section('js')
    {!! number_spinner_js() !!}
    <script src="{{ asset('js/plugins/sweatalert.js') }}"></script>
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

        // ADD TO CART
        $('#add_to_cart').click(function () {
            let id = $(this).data('id');
            $.get( "cart/add/" + id, function( data ) {
                Swal.fire({
                    icon: 'success',
                    title: 'item has been added to your shopping cart',
                    showConfirmButton: false,
                    timer: 2500,
                    showClass: {
                        popup: 'animated tada fast'
                    },
                    hideClass: {
                        popup: 'animated fadeOut slow'
                    }
                })

                // ADD TO CART
                $('#cart').addClass('pulse'); // trigger pulse on added cart
                addToCart();// Update cart item count
            });
        });

        //CHECKOUT 
        $('#checkout').click(function () {
            let items = [];
            let id = $(this).data('id');
            let qty = $('.number_spinner').val();

            items.push({
                id:id,
                qty:qty
            });

            items = window.btoa(JSON.stringify(items)); // encode a string
            window.location.href = "checkout/"+items;
        });

    </script>
@endsection