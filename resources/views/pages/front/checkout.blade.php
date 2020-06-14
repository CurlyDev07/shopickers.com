@extends('layouts.app')

@section('css')
    <style>
/*         
        @media only screen and (max-width: 639px) {
            #footer {
                display: none;
            }
        } */
    </style>
@endsection

@section('content')
   
    <div class="tmx-0 tpx-0 md:tmx-10 md:tpx-8  tpt-5 sm:tpb-8 md:tpy-8">
        <div class="tflex tw-full">
            <div class="tw-full lg:tw-3/4">
                <div class="tpl-8 ttext-primary ttext-xl tfont-medium" id="re">CHECKOUT</div>
                <div class="md:tpx-8">
                    <ul class="collapsible tmt-5">
                        <li>
                            <div class="collapsible-header ttext-primary">
                                <i class="material-icons">looks_one</i>
                                    Order Review
                                <i class="fas fa-eye fa-2x ttext-primary tml-auto"></i>
                            </div>
                            <div class="collapsible-body tbg-white tpb-3 tpx-0 sm:tpx-5">
                                <div class="a">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th class="thidden sm:ttable-cell ttext-left ttext-title tpt-0">Item(s)</th>
                                                <th class="thidden sm:ttable-cell ttext-center ttext-title tpt-0">Price</th>
                                                <th class="thidden sm:ttable-cell ttext-center ttext-title tpt-0">Quantity</th>
                                                <th class="thidden sm:ttable-cell ttext-center ttext-title tpt-0">Subtotal</th>
                                            </tr>
                                        </thead>
                                
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td class="tpy-0 trelative">
                                                        <div class="tflex-col sm:tflex-row tflex titems-center">
                                                            <img src="{{ $item['image'] }}" class="thidden sm:tblock sm:th-20 sm:tw-20 th-16 tw-16">
                                                            <div class="tblock sm:thidden tw-full tflex tjustify-center titems-center">
                                                                <div class="">
                                                                    <img src="{{ $item['image'] }}" class="sm:th-20 sm:tw-20 th-16 tw-16">
                                                                </div>
                                                                <div class="tborder-r tpx-3">
                                                                    <span class="ttext-sm ttext-gray-600">Price:</span> 
                                                                    <span class="ttext-md tfont-medium">₱{{ $item['price'] }}</span>
                                                                </div>
                                                                <div class="tborder-r tpx-3">
                                                                    <span class="ttext-sm ttext-gray-600">Qty:</span>
                                                                    <span class="ttext-md tfont-medium">{{ $item['qty'] }}</span>
                                                                </div>
                                                                <div class="tpx-3">
                                                                    <span class="ttext-sm ttext-gray-600">SubTotal:</span>
                                                                    <span class="ttext-md tfont-medium">₱{{ $item['subtotal'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="{{ item_show_slug($item['title'], $item['id']) }}" class="tmb-4 sm:tmb-2 ttext-center sm:ttext-left ttext-sm hover:tunderline tmax-w-sm tml-3 ttext-primary truncate">
                                                                {{ $item['title'] }}
                                                            </a>
                                                        </div>
                                                        <a href="/cart" class="tabsolute tcursor-pointer tflex tmr-2 tright-0 ttext-blue-500" style="line-height: 16px;top: 20%;">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td class="thidden sm:ttable-cell tpy-0 ttext-center">₱{{ $item['price'] }}</td>
                                                    <td class="thidden sm:ttable-cell tpy-0 ttext-center">{{ $item['qty'] }}</td>
                                                    <td class="thidden sm:ttable-cell tpy-0 ttext-center">₱{{ $item['subtotal'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
        
                                    <div class="tborder-b tflex">
                                        <div class="tw-4/5 ttext-right tp-4 tborder-r-2 tborder-gray-400">Subtotal</div>
                                        <div class="tw-1/5 ttext-center tp-4">₱{{ $subtotal }}</div>
                                    </div>  
                                    <div class="tborder-b tflex">
                                        <div class="tw-4/5 ttext-right tp-4 tborder-r-2 tborder-gray-400">Shipping Fee</div>
                                        <div class="tw-1/5 ttext-center tp-4">₱{{ $shipping }}</div>
                                    </div>  
                                    <div class="tborder-b tflex">
                                        <div class="tw-4/5 ttext-right tp-4 tborder-r-2 tfont-medium tborder-gray-400 tbg-gray-200">Order Total</div>
                                        <div class="tw-1/5 ttext-center tpx-4 tpy-3 tfont-medium tbg-gray-200 ttext-xl">₱{{ $total }}</div>
                                    </div>  
                                    <div class="tflex tjustify-end">
                                        <a id="order_review" class="tmr-4 sm:tmr-0 focus:tbg-primary hover:tbg-primary tbg-primary tmt-3 tpy-3 trounded-b trounded-t ttext-center ttext-white tpx-8 waves-effect waves-light">
                                            Continue
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </li><!-- ORDER REVIEW -->
                        <li>
                            <div class="collapsible-header ttext-primary">
                                <i class="material-icons">looks_two</i>
                                Shipping Information
                                <i class="fas fa-shipping-fast fa-2x ttext-primary tml-auto"></i>
                            </div>
                            <div class="collapsible-body tpb-3 tbg-white">
                                <form class="col s12" action="{{ url('charge') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" id="submit" name="submit" class="thidden">
                                    <input type="hidden" name="base64_item_details" value="{{ request()->base64_item_details }}">
                                    <input type="hidden" name="payment_method" value="cod">

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" name="first_name" type="text" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->first_name }}"
                                                @endif
                                            >
                                            <label for="first_name">First Name</label>
                                        </div><!-- First Name -->
                                        <div class="input-field col s6">
                                            <input id="last_name" type="text" name="last_name" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->last_name }}"
                                                @endif
                                            >
                                            <label for="last_name">Last Name</label>
                                        </div><!-- Last Name -->
                                    </div><!-- FIRST AND LAST NAME -->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="phone_number" type="text" name="phone_number" onkeypress="allnumeric(this)" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->phone_number }}"
                                                @endif
                                            >
                                            <label for="phone_number">Phone number</label>
                                        </div><!-- Phone number -->
                                        <div class="input-field col s6">
                                            <input id="email" type="email" name="email" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->email }}"
                                                @endif
                                            >
                                            <label for="email">Email</label>
                                        </div><!-- Last Name -->
                                    </div><!-- EMAIL AND PHONE NUMBER -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="address" name="address" class="materialize-textarea" required>@if(auth()->check()){{ auth()->user()->address }}@endif</textarea>
                                            <label for="address">Address</label>
                                        </div><!-- Address -->
                                        <div class="input-field col s12">
                                            <textarea id="barangay" name="barangay" class="materialize-textarea" required>@if(auth()->check()){{ auth()->user()->barangay }}@endif</textarea>
                                            <label for="barangay">Barangay / District</label>
                                        </div><!-- Barangay / District -->
                                        <div class="input-field col s6">
                                            <input id="city" type="text" name="city" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->city }}"
                                                @endif
                                            >
                                            <label for="city">City / Municipality</label>
                                        </div><!-- CITY -->
                                        <div class="input-field col s6">
                                            <input id="province" type="text" name="province" required
                                                @if (auth()->check())
                                                    value="{{ auth()->user()->province }}"
                                                @endif
                                            >
                                            <label for="province">Province</label>
                                        </div><!-- province -->
                                        @if (1==0)
                                            <!-- TEMPORARILY HIDE BECAUSE WE ARE GOING TO SELL IN PH -->
                                            <!--       MANY PH PEOPLE DONT KNOW THIER ZIP CODE       -->
                                            <div class="input-field col s2">
                                                <input id="zip_code" type="text" name="zip_code">
                                                <label for="zip_code">ZIP Code</label>
                                            </div><!-- ZIP Code -->
                                        @endif

                                        <a id="shipping_info" class="focus:tbg-primary hover:tbg-primary right tbg-primary tmt-3 tpy-3 tpx-8 trounded-b trounded-t ttext-center ttext-white waves-effect waves-light">
                                            Continue
                                        </a>
                                    </div><!-- ADDRESS -->
                                </form>
                            </div>
                        </li><!-- Shipping Information -->
                        <li>
                            <div class="collapsible-header ttext-primary">
                                <i class="material-icons">looks_3</i>
                                    Payment Method
                                <i class="fas fa-credit-card fa-2x ttext-primary tml-auto"></i>
                            </div>
                            <div class="collapsible-body tpy-5 tbg-white">
                                {{-- <div class="tflex titems-center tjustify-between"> --}}
                                    <div class="tflex titems-center">
                                        <label>
                                            <input type="checkbox" checked id="cod" disabled/>
                                            <span>Cash on Delivery</span>
                                        </label>
                                        <img src="{{ asset('images/payments/cash_on_delivery.png') }}" class="tml-6" style="height:45px" alt="">
                                    </div><!-- Cash on Delivery-->

                                    {{-- <div class="tflex titems-center tmt-8">
                                        <label>
                                            <input type="checkbox" id="credit_debit"/>
                                            <span>Credit/Debit Card</span>
                                        </label>
                                        <img src="{{ asset('images/payments/credit_debit.png') }}" class="tml-5" style="height:45px" alt="paypal.png">
                                    </div><!-- PAYPAL --> --}}
                                    
                                {{-- </div> --}}
                                <div class="tflex tjustify-end tmt-8">
                                    <button onclick="checkout();" class="thidden sm:tblock tbg-primary focus:tbg-primary hover:tbg-primary waves-effect waves-light tpy-3 tpx-8 trounded-b trounded-t ttext-white">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </li><!-- Payment Method -->
                    </ul>
                </div>
            </div>
            <div class="thidden lg:tblock tw-1/4">
                <div class="ttext-primary ttext-xl tfont-medium">Order Summary</div>
                <div class="tbg-white tmt-5 tp-5 tshadow-md tsticky ttop-0">
                    <div class="tflex tjustify-between">
                        <span class="ttext-sm">Subtotal ({{ count($items) }} items)</span>
                        <span class="tfont-semibold">₱{{ number_format($subtotal) }}</span>
                    </div>
                    <div class="tflex tjustify-between tmt-4">
                        <span class="ttext-sm">Shipping Fee</span>
                        <span class="tfont-semibold">₱{{ number_format($shipping) }}</span>
                    </div>
                    <div class="thidden xl:tblock tmy-4">
                        <label for="promo_code">Promo Code</label>
                        <div class="tflex tjustify-between">
                            <input type="text" class="browser-default tborder tborder-gray-400 tp-1 trounded">
                            <button id="promo_code" class="focus:tbg-primary focus:ttext-white tborder tborder-primary tpx-4 trounded ttext-primary ttext-sm waves waves-effect">Apply</button>
                        </div>
                    </div>
                    <hr>
                    <div class="tflex tjustify-between tmy-4 titems-center">
                        <span class="tfont-bold">Total</span>
                        <span class="tfont-bold ttext-lg">₱{{ number_format($total) }}</span>
                    </div>
                    <div class="tflex tjustify-between tmt-6 titems-center">
                        <button onclick="checkout();" class="tbg-primary focus:tbg-primary waves-effect tpy-3 tpx-5 ttext-white tw-full trounded">Place Order</button>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- FIXED BOTTOM NAVIGATION ON MOBILE DEVICES -->
    <div class="tblock sm:thidden tbg-white tbottom-0 tfixed tflex titems-center tw-full" style="z-index: 999">
        <div class="ttext-center tw-1/2">
            <div class="tfont-bold ttext-xs" style="color:rgba(0,0,0,.65);">Total Payment</div>
            <div class="tfont-bold tleading-none ttext-2xl ttext-lg ttext-primary">₱{{ $total }}</div>
        </div>
        <button onclick="checkout();" class="focus:tbg-primary tbg-primary tfont-medium tpy-4 ttext-white tw-1/2 waves-effect waves-light">Place Order</button>
    </div>



@endsection
@section('js')
    <script>
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems, {});

        document.addEventListener('DOMContentLoaded', function() {
            instances[0].open(0); // open order review tab
           
            $('#order_review').click(()=>{ 
                instances[0].open(1);
            });// open shipping info tab

            $('#shipping_info').click(()=>{
                instances[0].open(2);
            });// open payment method

        });

        function checkout() {
            var form = true;

            $('form').serializeArray().forEach(field => {
                if (!field.value) {
                    form = false;
                }// if form field has no value return false
            });

            if (!form) {
                instances[0].open(1);// Open shipping information
                return $('#submit').trigger('click');
            }// if form error | prevent submit form

            loader(true);    
            $('#submit').trigger('click');
        }

        $('#cod').change(function () {
            $("#credit_debit").prop('checked', false);
            change_payment_method('cod');
        });

        $('#credit_debit').change(function () {
            $("#cod").prop('checked', false);
            change_payment_method('paypal');
        });

        function change_payment_method(payment_method) {
            let pm = $('input[name="payment_method"]').val(payment_method);
            console.log(pm.val());
        }


        $('#mobile-nav').removeClass("tz-40");// remove bottom nav
    </script>
@endsection