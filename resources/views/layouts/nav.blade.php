<div class="tbg-primary" style="background: #4d7418;">
    <div class="tcontainer tpy-3">
        <div class="tflex tjustify-between">
            <h1 class="logo">
                <a href="/">
                    <img src="{{ asset('images\logo\main.png') }}" class="tabsolute" style="height: 100px;margin-top: -1px;" alt="">
                </a>
            </h1>
            <ul class="tflex tfont-medium titems-center ttext-white">
                @foreach (\App\Category::categories() as $item)
                    <li class="tborder-white tpx-3 hover:ttext-primary hover:tunderline tcursor-pointer">
                        <i class="fab fa-envira"></i>
                        <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tself-center trelative">
                <a href="{{ route('cart') }}" id="cart" class="btn-floating hover:tbg-white tbg-white">
                    <i class="material-icons" style="color: #88b44e;">shopping_cart</i>
                </a>
                <span id="cart_item_count" class="thidden t-ml-4 t-mt-2 tabsolute tbg-red-500 trounded-full ttext-white" style="z-index: 999;padding: 0px 7px;">1</span>
            </div>
        </div>
    </div>
</div>

<div class="tbg-white">
    <div class="tcontainer tpy-5">
        <div class="tflex tflex-growt tjustify-between titems-center">
            <ul class="tflex tml-40">
                <li>
                    <h4 class="text-base tfont-medium ttext-title thidden">a</h4>
                </li>
            </ul>
            <ul class="tflex tfont-bold ttext-primary ttext-xs">
                <li class="hover:tunderline tmr-8 tcursor-default">
                    <a href="{{ route('products.all') }}">PRODUCTS</a>
                </li>
                <li class="hover:tunderline tmr-8 tcursor-default">
                    <a href="{{ route('contactus') }}">CONTACT US</a>
                </li>
                <li class="hover:tunderline tmr-8 tcursor-default">
                    <a href="{{ route('aboutus') }}">ABOUT US</a>
                </li>
                <li class="hover:tunderline tmr-8 tcursor-default">MY WISHLIST</li>
                <li class="hover:tunderline tmr-8 tcursor-default"><a href="{{ route('dashboard') }}">MY ACCOUNT</a></li>
                <li class="hover:tunderline tmr-8 tcursor-default"><a href="">SIGN UP</a></li>
                <li class="hover:tunderline tcursor-default"><a href="{{ route('login') }}">LOGIN</a></li>
            </ul>
        </div>
    </div>
</div>