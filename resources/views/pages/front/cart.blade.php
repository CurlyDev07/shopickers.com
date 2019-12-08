@extends('layouts.app')
@section('content')

    <div class="tcontainer tpy-8">
        <div class="tflex tjustify-between titems-center tmb-5">
            <h1 class="ttext-blue-500 ttext-xl tfont-medium">SHOPPING CART</h1>
        </div>

        <div class="lg:tflex tmb-32">
            <div class="tw-full lg:tw-3/4">
                <div class="tborder tp-8 lg:tmr-8 tbg-white">
                    <div class="tflex">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th class="lg:tw-1/2 ttext-right lg:ttext-left">Item</th>
                                    <th class="ttext-center">Price</th>
                                    <th class="ttext-center">Qty</th>
                                    <th class="ttext-center">Subtotal</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                @for ($i = 0; $i < 5; $i++)
                                    <tr class="">
                                        <td class="tp-1 lg:tp-3">
                                            <div class="tflex titems-center">
                                                <img class="tblock lg:thidden tmr-3 th-12" src="http://www.portotheme.com/magento/porto/media/catalog/product/cache/7/thumbnail/80x80/9df78eab33525d08d6e5fb8d27136e95/2/_/2_14_2.jpg" alt="">
                                                <img class="thidden lg:tblock tmr-3" src="http://www.portotheme.com/magento/porto/media/catalog/product/cache/7/thumbnail/80x80/9df78eab33525d08d6e5fb8d27136e95/2/_/2_14_2.jpg" alt="">
                                                <a href="" class="ttext-blue-500 hover:tunderline" style="text-align: left">Huawei Y6 Pro 2019 32GB — 3GB 6.09 inches HD+ Screen Smart Phone</a>
                                            </div>
                                        </td>
                                        <td class="ttext-center">99</td>
                                        <td class="tp-1 lg:tp-3">
                                            <div class="lg:tflex tjustify-center">
                                                {!! number_spinner_markup() !!}
                                            </div>
                                        </td>
                                        <td class="ttext-blue-500 ttext-center">$999.87</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="thidden md:tflex md:tjustify-between titems-center tpt-5 tmt-3">
                        <a href="javascript:void(0)" class="hover:tbg-blue-500 hover:ttext-white tborder tpx-4 tpy-2 ttext-gray-700 ttext-sm waves-effect">Clear Shopping Cart</a>
                        <a href="javascript:void(0)" class="hover:tbg-blue-500 hover:ttext-white tborder tpx-4 tpy-2 ttext-gray-700 ttext-sm waves-effect">Continue Shopping</a>
                    </div>
                </div>

            </div>
            <div class="lg:torder-last tblock md:hidden tmt-8 lg:tmt-0  tw-full lg:tw-1/4">
                <div class="tborder tp-5 tbg-white ">
                    <h1 class="tfont-medium tmb-5 ttext-lg">Order Summary</h1>
                    <div class="tflex tjustify-between tmb-5">
                        <span class="ttext-gray-600 ttext-sm">Subtotal (1 items)</span>
                        <span class="tfont-medium">$298.00</span>
                    </div>
                    <div class="tflex tjustify-between tmb-5">
                        <span class="ttext-gray-600 ttext-sm">Shipping Fee</span>
                        <span class="tfont-medium">₱114.00</span>
                    </div>
                    <div class="tflex tjustify-between tmb-5">
                        <input type="text" class="tw-2/3 browser-default tborder tborder-gray-400 tp-1 trounded">
                        <button id="promo_code" class="focus:tbg-blue-500 focus:ttext-white tborder tborder-blue-500 tpx-4 trounded ttext-blue-500 ttext-sm waves waves-effect">Apply</button>
                    </div>
                    <div class="tflex tjustify-between tmb-5">
                        <span class="ttext-lg">Total</span>
                        <span class="tfont-medium ttext-lg ttext-blue-500">₱464.00</span>
                    </div>
                    <button class="tw-full tbg-blue-500 tpy-3 md:tpy-2 tpx-5 ttext-white focus:tbg-blue-500 waves-effect">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
            
@endsection

@section('js')
    {!! number_spinner_js() !!}
@endsection