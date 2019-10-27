@extends('layouts.app')

@section('nav')
    @include('pages.includes.top_nav_categories')
@endsection

@section('content')

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
         /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
    }

</style>

    <div class="tw-full tmb-32">
        <div class="titems-center tw-full">
            <i class="fas fa-home ttext-gray-500 tmr-5"></i>
            <i class="fas fa-chevron-right ttext-gray-500 ttext-xs tmr-5"></i>
            <span class="ttext-gray-500 ttext-sm">Computer Mouse</span>
        </div><!-- BreadCrumbs -->

        <div class="tflex tw-full tmt-4">
            <div class="tw-2/6">
                <img src="{{ asset('images/watch.jpg') }}" class="tinline tborder" style="width: 396px;height: auto;">
            </div><!-- LEFT SIDE -->
            <div class="tw-3/6">
                <div class="tpx-3">
                    <h2 class="tfont-semibold ttext-3xl ttext-gray-800">Computer Mouse</h2>
                    <div class="tpy-3 tflex tmb-2">
                        <div class="ttext-sm tmr-5">
                            <i class="fas fa-star ttext-yellow-400"></i> 4.8
                        </div>
                        <div class="tborder-gray-400 tborder-l ttext-sm tpl-5">0 Review(s)</div>
                    </div><!-- RATINGS -->
                    <div class="tleading-relaxed tpb-5 tborder-b">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tpy-4">
                        <p class="tmb-2">Availability: 2 pieces </p>
                        <div class="tflex titems-center tmt-4">
                            <span class="tfont-extrabold ttext-2xl ttext-blue-500 tmr-4" style="font-family: arial;" id="price" data-price="500">{{ currency(500) }}</span>
                            {!! number_spinner_markup() !!}
                        </div>
                    </div>
                </div>
            </div><!-- MIDDLE SIDE -->
            <div class="tw-1/6">
            </div><!-- RIGHT SIDE -->
        </div>
    </div>
@endsection
@section('js')
    {!! number_spinner_js() !!}

    <script>
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

    </script>
@endsection