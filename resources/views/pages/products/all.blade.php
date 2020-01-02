@extends('layouts.app')

@section('content')
  
    <div class="tcontainer tpb-5">
        <div class="tflex tjustify-between titems-center tpy-5">
            <div class="ttext-2xl ttext-title tfont-medium">Products</div>
            <form action="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}" class="tflex">
                <select class="browser-default form-control" name="price" id="price">
                    <option value="" disabled selected>Price Sort</option>
                    <option value="desc">High to low</option>
                    <option value="asc">Low to High</option>
                </select>
                <button style="padding: 0 16px 0 15px;" type="submit" class="browser-default focus:tbg-gray-100 focus:toutline-none hover:tbg-gray-100 tbg-white tborder tml-3 toutline-none tpl-3 tpr-3 trounded ttext-primary ttext-sm waves-effect waves-green">
                    <i class="fas fa-play"></i>
                </button>
            </form>
        </div>

        <div class="t-mx-2 tflex tflex-wrap">
            @foreach ($products as $product)
                <div class="tw-1/5 tpx-2 tmb-4" onclick="item_show('{{ item_show_slug($product['title'], $product['id']) }}')">
                    <div class="tbg-white tshadow-lg">
                        <img src="{{ $product['images'][0]['img'] }}" style="margin: 0 auto;height: 232px;" alt="">
                        <div class="tpx-3 tpy-2">
                            <div class="tmt-1 ttext-gray-800 ttruncate tcursor-default">
                                {{ $product['title'] }}
                            </div>
                            <div class="tflex titems-center tmt-1 tcursor-default">
                                <div class="tfont-medium ttext-primary ttext-lg">
                                    ₱{{ number_format($product['price']) }}
                                </div>
                                <strike class="ttext-gray-500 ttext-sm tml-2">
                                    {{ $product['compare_price'] != '' ? '₱'.number_format($product['compare_price']) : '' }}
                                </strike>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection

@section('js')
    <script>
       
    </script>
@endsection