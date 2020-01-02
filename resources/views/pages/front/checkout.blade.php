@extends('layouts.app')

@section('content')
   
    <div class="tcontainer tpy-8">
        <div class="tflex tw-full tmb-32">
            <div class="tw-3/4">
                <div class="ttext-primary ttext-xl tfont-medium">CHECKOUT</div>
                <div class="tpx-8">
                    <ul class="collapsible popout tmt-5">
                        <li>
                            <div class="collapsible-header ttext-primary">
                                <i class="material-icons">looks_one</i>
                                    Order Review
                                <i class="fas fa-eye fa-2x ttext-primary tml-auto"></i>
                            </div>
                            <div class="collapsible-body tbg-white">
                                <div class="a">
                                    <table class="responsive-table centered">
                                        <thead>
                                            <tr>
                                                <th class="ttext-left ttext-title tpt-0">Item</th>
                                                <th class="ttext-center ttext-title tpt-0">Price</th>
                                                <th class="ttext-center ttext-title tpt-0">Quantity</th>
                                                <th class="ttext-center ttext-title tpt-0">Subtotal</th>
                                            </tr>
                                        </thead>
                                
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>
                                                        <div class="tflex titems-center">
                                                            <img src="{{ $item['image'] }}" style="height: 80px;width: 80px;" alt="">
                                                            <span class="ttext-primary hover:tunderline"></span>
                                                            <a href="{{ item_show_slug($item['title'], $item['id']) }}" class="hover:tunderline tmax-w-sm tml-3 ttext-primary ttruncate">
                                                               {{ $item['title'] }}
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>₱{{ $item['price'] }}</td>
                                                    <td>{{ $item['qty'] }}</td>
                                                    <td>₱{{ $item['subtotal'] }}</td>
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
                                </div>
                            </div>
                        </li><!-- ORDER REVIEW -->
                        <li>
                            <div class="collapsible-header ttext-primary">
                                <i class="material-icons">looks_two</i>
                                Shipping Information
                                <i class="fas fa-shipping-fast fa-2x ttext-primary tml-auto"></i>
                            </div>
                            <div class="collapsible-body tbg-white">
                                <form class="col s12" action="{{ url('charge') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" id="submit" name="submit" class="thidden">
                                    <input type="hidden" name="base64_item_details" value="{{ request()->base64_item_details }}">

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" name="first_name" type="text" required>
                                            <label for="first_name">First Name</label>
                                        </div><!-- First Name -->
                                        <div class="input-field col s6">
                                            <input id="last_name" type="text" name="last_name" required>
                                            <label for="last_name">Last Name</label>
                                        </div><!-- Last Name -->
                                    </div><!-- FIRST AND LAST NAME -->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="phone_number" type="text" name="phone_number" required>
                                            <label for="phone_number">Phone number</label>
                                        </div><!-- Phone number -->
                                        <div class="input-field col s6">
                                            <input id="email" type="email" name="email">
                                            <label for="email">Email</label>
                                        </div><!-- Last Name -->
                                    </div><!-- EMAIL AND PHONE NUMBER -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="address" name="address" class="materialize-textarea" ></textarea>
                                            <label for="address">Address</label>
                                        </div><!-- Address -->
                                        <div class="input-field col s12">
                                            <textarea id="barangay" name="barangay" class="materialize-textarea" ></textarea>
                                            <label for="suite">Barangay / District</label>
                                        </div><!-- Barangay / District -->
                                        <div class="input-field col s6">
                                            <input id="city" type="text" name="city" required>
                                            <label for="city">City / Municipality</label>
                                        </div><!-- CITY -->
                                        <div class="input-field col s4">
                                            <input id="province" type="text" name="province" required>
                                            <label for="province">Province</label>
                                        </div><!-- State -->
                                        <div class="input-field col s2">
                                            <input id="zip_code" type="text" name="zip_code">
                                            <label for="zip_code">ZIP Code</label>
                                        </div><!-- State -->

                                        <a id="shipping_info" class="focus:tbg-primary hover:tbg-primary right tbg-primary tmt-3 tpy-3 trounded-b trounded-t ttext-center ttext-white tw-1/3 waves-effect waves-light">
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
                            <div class="collapsible-body tbg-white">
                                
                                <div class="tflex titems-center">
                                    <img src="{{ asset('images/payments/credit_debit.png') }}" class="tmr-6" style="height:45px" alt="">
                                    <label>
                                        <input type="checkbox" checked="checked" disabled/>
                                        <span>Credit/Debit Card</span>
                                    </label>
                                </div><!-- Credit/Debit Card -->
                                <div class="tflex titems-center tmt-5">
                                    <img src="{{ asset('images/payments/paypal.png') }}" class="t-ml-6" style="height:45px" alt="paypal.png">
                                    <label>
                                        <input type="checkbox" checked="checked" disabled/>
                                        <span>Paypal</span>
                                    </label>
                                </div><!-- PAYPAL -->

                                <div id="payment"></div>
        
                                <div class="ttext-right tmt-5">
                                    <button onclick="checkout();" class="tbg-primary focus:tbg-primary hover:tbg-primary waves-effect waves-light tpx-12 tpy-3 trounded-b trounded-t ttext-white tw-1/3">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </li><!-- Payment Method -->
                    </ul>
                </div>
            </div>
            <div class="tw-1/4">
                <div class="ttext-primary ttext-xl tfont-medium">Order Summary</div>
                <div class="tmt-5 tp-5 tshadow-md tbg-white">
                    <div class="tflex tjustify-between">
                        <span class="ttext-sm">Subtotal ({{ count($items) }} items)</span>
                        <span class="tfont-semibold">₱{{ number_format($subtotal) }}</span>
                    </div>
                    <div class="tflex tjustify-between tmt-4">
                        <span class="ttext-sm">Shipping Fee</span>
                        <span class="tfont-semibold">₱{{ number_format($shipping) }}</span>
                    </div>
                    <div class="tmy-4">
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

@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {});
            instances[0].open(1);
            $('#shipping_info').click(()=>{
                instances[0].open(2);
            });
        });

        function checkout() {
            $('#submit').trigger('click');
        }

       

    </script>
@endsection