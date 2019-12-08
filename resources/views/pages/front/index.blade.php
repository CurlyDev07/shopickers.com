@extends('layouts.app')

@section('nav')
    @include('pages.includes.nav_features')
@endsection

@section('content')

<div class="tcontainer tpy-8">
    <div class="tflex tflex-wrap tmb-5">
        <div class="tw-1/4 tpr-8">
            <ul class="tborder tborder-gray-400  tbg-white" style="height: 398px;">
                <li class="tpx-6 tpy-3 ttext-sm tborder-b tfont-bold ttext-gray-800">CATEGORIES</li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="" class="tmx-8 tpy-4 tborder-b tblock ttext-sm tfont-medium hover:tborder-blue-500">Home</a>
                </li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="" class="tmx-8 tpy-4 tborder-b tblock ttext-sm tfont-medium hover:tborder-blue-500">Categories</a>
                </li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="{{ route('products.all') }}" class="tmx-8 tpy-4 tborder-b tblock ttext-sm tfont-medium hover:tborder-blue-500">Products</a>
                </li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="" class="tmx-8 tpy-4 tborder-b tblock ttext-sm tfont-medium hover:tborder-blue-500">Best Deals</a>
                </li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="" class="tmx-8 tpy-4 tborder-b tblock ttext-sm tfont-medium hover:tborder-blue-500">Featured</a>
                </li>
                <li class="ttext-gray-900 hover:tbg-blue-500 hover:ttext-white">
                    <a href="" class="tmx-8 tpy-4 tblock ttext-sm tfont-medium">Special Offer</a>
                </li>
            </ul>
        </div>
        <div class="tw-3/4">
            <div class="main-banner owl-carousel owl-theme trelative">
                @for ($i = 0; $i < 3; $i++)
                    <div class="item">
                        <div class="trelative">
                            <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/slider/06/slide2n.jpg" alt="">
                            <div class="tabsolute" style="z-index:1;top:23%;left:8%;text-align:left;">
                                <span class="ttext-2xl tfont-medium">UP TO <span class="ttext-3xl"><b>60%</b></span> OFF</span>
                                <h2 class="tfont-extrabold ttext-5xl ttext-gray-900">GREAT DEALS</h2>
                                <p class="ttext-sm tmt-2">Limited items available at this price.</p>
                                <button class="tbg-black tmt-8 tpx-8 tpy-3 trounded ttext-sm ttext-white" style="font-family: arial;">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    
    <div class="tflex tflex-column tmb-5">
        <div class="tw-1/4  tpr-8">
            <div class="side_promo-banner tbg-white owl-carousel owl-theme trelative tborder">
                <div class="item">
                    <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/content/06/ad1n.jpg" alt="">
                </div>
                <div class="item">
                    <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/content/06/ad1n.jpg" alt="">
                </div>
            </div><!-- promo -->
    
            <div class="testimonial_side tp-5 tbg-white owl-carousel owl-theme tmt-5">
                <div class="item">
                    <p class="ttext-blue-500 ttext-sm tfont-bold ttext-left">08-Dec-2014</p>
                    <p class="ttext-lg tfont-medium ttext-left tmy-1">Post Format – Image Gallery</p>
                    <p class="tmt-3 ttext-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam molestias voluptatibus tenetur omnis, eius exercitationem repudiandae, iure nulla inventore ipsam, voluptatum aliquid earum eos alias sequi placeat nostrum commodi veniam!</p>
                </div>
                <div class="item">
                    <p class="ttext-blue-500 ttext-sm tfont-bold ttext-left">08-Dec-2014</p>
                    <p class="ttext-lg tfont-medium ttext-left tmy-1">Wow Format – Image Gallery</p>
                    <p class="tmt-3 ttext-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam molestias voluptatibus tenetur omnis, eius exercitationem repudiandae, iure nulla inventore ipsam, voluptatum aliquid earum eos alias sequi placeat nostrum commodi veniam!</p>
                </div>
            </div><!-- Testimonial -->
        </div><!-- LEFT SIDE -->
        <div class="tw-3/4">
            <div class="tw-full tflex tflex-wrap">
                <div class="tw-full tflex tmb-5">
                    <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/content/06/img1.jpg" class="tmr-auto hover:topacity-75" alt="promo-1">
                    <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/content/06/img2.jpg" class="tmr-auto hover:topacity-75" alt="promo-1">
                    <img src="https://www.portotheme.com/magento/porto/media/wysiwyg/porto/homepage/content/06/img3.jpg" class="hover:topacity-75" alt="promo-1">
                </div>
                <div class="tw-full tmb-5">
                    <div class="tflex tpy-4">
                        <h2 class="tfont-bold ttext-gray-900">FEATURED ITEMS</h2>
                    </div>
                    <div class="items owl-carousel owl-theme">
                        <div class="item">
                            <div class="tborder-1 tborder" onclick="item_show('{{ item_show_slug('Duis aute irure dolor in reprehen','3256461') }}')">
                                <img src="https://www.portotheme.com/magento/porto/media/catalog/product/cache/11/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/2/_/2_14_2.jpg" alt="">
                                <div class="tbg-white tflex tflex-wrap tjustify-center titems-center tpy-2 tpx-3">
                                    <i class="fas fa-star fa-xs ttext-gray-500"></i>
                                    <i class="fas fa-star fa-xs ttext-gray-500"></i>
                                    <i class="fas fa-star fa-xs ttext-gray-500"></i>
                                    <i class="fas fa-star fa-xs ttext-gray-500"></i>
                                    <i class="fas fa-star fa-xs ttext-gray-500"></i>
                                    <p class="tmt-1 ttext-sm ttext-gray-800 ttruncate">2PCS Car Cleaner Interior Wall Vents Exhaust Dashboard Dust Notebook Sponge Mist Magic Cleaning Tools Car Style Design</p>
                                    <p class="ttext-lg">$299.00</p>
                                </div>
                                <div class="action tflex tjustify-between">
                                    <a class="tflex titems-center tjustify-center tp-2 ttext-xs tw-full tborder tbg-blue-500 ttext-white tborder-blue-600 hover:tbg-blue-600 focus:tbg-blue-600 waves-effect">
                                        <i class="fas fa-cart-plus fa-2x tmr-2"></i>
                                        <span>ADD TO CART</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- RIGHT SIDE -->
    </div>
</div>

@endsection