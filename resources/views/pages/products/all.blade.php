@extends('layouts.app')

@section('nav')
    @include('pages.includes.top_nav_categories')
@endsection

@section('content')

    <div class="tcontainer tpy-8">
        <div class="tbg-white tp-5 trounded">
            <div class="tflex titems-center tmb-0">
                <div class="tw-1/2">
                    <h4 class="text-base tfont-medium ttext-title tmb-2">Products</h4>
                    <ul class="tflex ttracking-wider">
                        <li class="ttext-gray-500  tcursor-pointer hover:tunderline">Home</li>
                        <li class=" tcursor-pointer">
                            <i class="material-icons tleading-tight" style="color: #9f9f9f;font-size: 20px!important;">chevron_right</i>
                        </li>
                        <li class="ttext-gray-500  tcursor-pointer hover:tunderline">Products</li>
                        <li class=" tcursor-pointer">
                            <i class="material-icons tleading-tight" style="color: #9f9f9f;font-size: 20px!important;">chevron_right</i>
                        </li>
                        <li class="ttext-title  tcursor-pointer hover:tunderline">all</li>
                    </ul>
                </div>
                <div class="tw-1/2">
                    <ul class="tflex tjustify-end">
                        <li>
                            <i class="material-icons grey-text tmr-3">delete</i>
                        </li>
                        <li>
                            <i class="material-icons grey-text tmr-3">sort</i>
                        </li>
                        <li>
                            <i class="material-icons grey-text">more_vert</i>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="t-mx-2 tflex tflex-wrap tpt-8">
            @foreach ($products as $product)
                <div class="tw-1/5 tpx-2 tmb-4" onclick="item_show('{{ item_show_slug($product['title'], $product['id']) }}')">
                    <div class="tbg-white tshadow-lg">
                        <img src="{{ $product['images'][0]['img'] }}" style="margin: 0 auto;height: 232px;" alt="">
                        <div class="tpx-3 tpy-2">
                            <div class="tmt-1 ttext-gray-800 ttruncate tcursor-default">
                                {{ $product['title'] }}
                            </div>
                            <div class="tflex titems-center tmt-1 tcursor-default">
                                <div class="tfont-medium ttext-blue-500 ttext-lg">
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