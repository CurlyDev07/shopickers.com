@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('input_counter/style.css') }}">
@endsection
@section('content')

    <script>
         function compute_checked_items() {
            let total = 0;
            let total_items = 0;

            $('.cart-item:checked').each(function () {
                let qty = $(this).parent().parent().parent().find('#qty').val();
                let price = $(this).parent().parent().parent().find('#price').html();
                let subtotal = (qty * price); 
                total += subtotal;
                total_items += parseInt(qty);

                // console.log(qty)
                // console.log(price)
                // console.log(subtotal)

                // UPDATE THE SUBTOTAL
                $(this).parent().parent().parent().find('#subtotal').html(subtotal);
            });

            $('#total').html(total);// UPDATE THE TOTAL
            $('#total_items').html(total_items);// UPDATE THE TOTAL ITEMS
        }
    </script>

    <div class="tcontainer tpy-8">
        <div class="tflex tjustify-between titems-center tmb-5">
            <h1 class="ttext-blue-500 ttext-xl tfont-medium">SHOPPING CART</h1>
        </div>

        {{-- FOR CART CONTAIN ITEMS --}}
        @if (count($products))
            <div class="lg:tflex">
                <div class="tborder tp-8 tbg-white tw-full">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th style="width: 1%;" class="tpt-0">
                                    <label>
                                        <input type="checkbox" class="all-cart-item"/>
                                        <span class="ttext-title"><span class="thidden">All</span></span>
                                    </label>
                                </th>
                                <th class="lg:tw-1/2 ttext-right lg:ttext-left ttext-title tpt-0">Item</th>
                                <th class="ttext-center ttext-title tpt-0">Price</th>
                                <th class="ttext-center ttext-title tpt-0">Qty</th>
                                <th class="ttext-center ttext-title tpt-0">Subtotal</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($products as $key => $item)
                                <tr class="">
                                    <td class="tp-1 lg:tp-3 tpl-0" style="padding-left: 5px;width: 1%;">
                                        <label>
                                            <input type="checkbox" class="cart-item" value="{{ $item['id'] }}" onclick="compute_checked_items()"/>
                                            <span class="ttext-title"> <div class="thidden">{{ $key + 1}}</div></span>
                                        </label>
                                    </td>
                                    <td class="tp-1 lg:tp-3">
                                        <div class="tflex titems-center">
                                            <img class="tblock lg:thidden tmr-3 th-12" style="height: 80px;width: 80px;" src="{{ $item['images'][0]['img'] }}" alt="">
                                            <img class="thidden lg:tblock tmr-3" style="height: 80px;width: 80px;" src="{{ $item['images'][0]['img'] }}" alt="">
                                            <a href="{{ item_show_slug($item['title'], $item['id']) }}" class="ttext-blue-500 hover:tunderline" style="text-align: left">{{ $item['title'] }}</a>
                                        </div>
                                    </td>
                                    <td class="ttext-center" id="price">{{ $item['price'] }}</td>
                                    <td class="tp-1 lg:tp-3">
                                        <div class="lg:tflex tjustify-center">
                                            <div class="custom-number-input th-10 tw-32">
                                                <div class="tflex tflex-row th-10 tw-full trounded-lg trelative tbg-transparent tmt-1">
                                                    <button data-action="decrement" class="decrement browser-default focus:tbg-gray-300 hover:tbg-gray-400 hover:ttext-gray-700 tbg-gray-300 tcursor-pointer th-full trounded-r ttext-gray-600 tw-20 waves-effect waves-light">
                                                        <span class="tm-auto ttext-2xl tfont-thin">−</span>
                                                    </button>
                                                    <input type="number" min="0" id="qty" class="browser-default toutline-none focus:toutline-none ttext-center tw-full tbg-gray-00 tfont-semibold ttext-md hover:ttext-black focus:ttext-black  md:ttext-base cursor-default tflex titems-center ttext-gray-700  toutline-none" name="custom-input-number" value="1">
                                                    <button data-action="increment" class="increment browser-default focus:tbg-gray-300 hover:tbg-gray-400 hover:ttext-gray-700 tbg-gray-300 tcursor-pointer th-full trounded-r ttext-gray-600 tw-20 waves-effect waves-light">
                                                        <span class="tm-auto ttext-2xl tfont-thin">+</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ttext-blue-500 ttext-center">₱ <span id="subtotal">{{ $item['price'] }}</span> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="thidden md:tflex md:tjustify-between titems-center tpt-5 tmt-3">
                        <a href="javascript:void(0)" id="clear_all_cart" class="hover:tbg-blue-500 hover:ttext-white tborder tpx-4 tpy-2 ttext-gray-700 ttext-sm waves-effect">Clear Shopping Cart</a>
                        <a href="javascript:void(0)" class="hover:tbg-blue-500 hover:ttext-white tborder tpx-4 tpy-2 ttext-gray-700 ttext-sm waves-effect">Continue Shopping</a>
                    </div>

                </div>
            </div>

            <div class="tborder tp-5 tbg-white tw-full tmt-5 tz-50 tbottom-0 tsticky">
                <div class="tflex titems-center tjustify-between tpb-6">
                    <h1 class="tfont-medium ttext-lg">Order Summary</h1>
                    <div class="tflex titems-center">
                        <label for="voucher" class="tfont-medium tmr-5 ttext-base ttext-title">Voucher</label>
                        <input type="text" id="voucher" class="browser-default tborder tborder-gray-400 tp-1 trounded tmr-8 ">
                        <button id="promo_code" style="padding: 6px 20px;" class="focus:tbg-blue-500 focus:ttext-white tborder tborder-blue-500 trounded ttext-blue-500 ttext-sm waves waves-effect">Apply</button>
                    </div>
                </div>
                <div class="tborder-t tflex titems-center tjustify-between tpt-6">
                    <div class="tw-1/2">
                        <h1 class="tfont-medium ttext-lg tinvisible">TOTAL</h1>
                    </div>
                    <div class="tw-1/2">
                        <div class="tflex tjustify-end titems-center">
                            <div class="tfont-medium ttext-black-100 tmr-2">Total (<span id="total_items">0</span> items):</div>
                            <div class="tfont-medium ttext-3xl ttext-blue-500 tmr-5">₱ <span id="total">0</span></div>
                            <button class="tbg-blue-500 ttext-white focus:tbg-blue-500 waves-effect" onclick="checkout()" style="padding: 10px 60px;">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        @else
        {{-- FOR EMPTY CART --}}

            <div class="ttext-center tbg-white tp-8 tpb-20">
                <img src="{{ asset('images/cart/emptycart.png') }}" class="tmx-auto t-mt-8" alt="emptycart.png">
                <p class="tfont-medium tmb-5 t-mt-8">Your shopping cart is empty</p>
                <a href="{{ route('products.all') }}" class="tbg-blue-500 trounded ttext-white" style="padding: 9px 45px;">Go Shopping Now</a>
            </div>
        @endif

    </div>
            
@endsection


@section('js')
    <script src="{{ asset('input_counter/script.js') }}"></script>
    <script src="{{ asset('js/plugins/sweatalert.js') }}"></script>

    {!! number_spinner_js() !!}

    <script>
        $(document).ready(function () {
            $('#clear_all_cart').click(function () {
                $.get( "{{ route('cart.clear.all') }}", function( data ) {
                    location.reload();
                });
            });// clear all cart item

            $('.all-cart-item').click(function (e) {
                if ($(this).prop('checked')) {
                    $(".cart-item").attr('checked', true);
                    compute_checked_items(); //compute checked items
                    return;
                }
                $(".cart-item").attr('checked', false);
            });// check all cart item

            $('.decrement').click(function () {
                let val = $(this).next().val();

                if (val == 0) {
                    $(this).parent().parent().parent().parent().parent().find('.cart-item').prop("checked", false);
                }// uncheck item if value = 0

                console.log(val);
                compute_checked_items();
            });
            $('.increment').click(function () {
                $(this).parent().parent().parent().parent().parent().find('.cart-item').prop("checked", true);
                compute_checked_items();// check item if value > 0
            });
        });

        function checkout() {
            let items = [];
            $('.cart-item:checked').each(function () {
                let id = $(this).val();
                let qty = $(this).parent().parent().parent().find('#qty').val();
                items.push({
                    id:id,
                    qty:qty
                });
            });

            if ($('.cart-item:checked').length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You have not selected any items for checkout',
                    showConfirmButton: false,
                    timer: 2500,
                    showClass: {
                        popup: 'animated tada fast'
                    },
                    hideClass: {
                        popup: 'animated fadeOut slow'
                    }
                })
            }
      
            items = window.btoa(JSON.stringify(items)); // encode a string
            window.location.href = "checkout/"+items;
        }

    </script>
@endsection