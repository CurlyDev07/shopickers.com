<div class="tbg-blue-500">
    <div class="tborder-b tborder-gray-400">
        <div class="tcontainer">
            <div class="tpy-2 tflex tflex-grow md:tjustify-between">
                <ul class="thidden md:tflex tfont-bold ttext-blue-100 ttext-xs">
                    <li class="hover:tunderline tmr-8 tcursor-default">USD</li>
                    <li class="hover:tunderline tmr-8 tcursor-default">ENGLISH</li>
                    <li class="hover:tunderline tmr-8 tcursor-default">COMPARE</li>
                </ul>

                <ul class="thidden md:tflex tfont-bold ttext-blue-100 ttext-xs">
                    <li class="hover:tunderline tmr-8 tcursor-default">HELLO, REGGIE FRIAS</li>
                    <li class="hover:tunderline tmr-8 tcursor-default">
                        <a href="{{ route('contactus') }}">CONTACT US</a>
                    </li>
                    <li class="hover:tunderline tmr-8 tcursor-default">
                        <a href="{{ route('aboutus') }}">ABOUT US</a>
                    </li>
                </ul>
                
                <ul class="tflex tfont-bold ttext-blue-100 ttext-xs">
                    <li class="hover:tunderline tmr-8 tcursor-default">MY WISHLIST</li>
                    <li class="hover:tunderline tmr-8 tcursor-default"><a href="{{ route('dashboard') }}">MY ACCOUNT</a></li>
                    <li class="hover:tunderline tmr-8 tcursor-default"><a href="">SIGN UP</a></li>
                    <li class="hover:tunderline tcursor-default"><a href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </div><!-- nav top link  -->

    <div class="tcontainer tpy-8">
        <div class="tflex tjustify-between">
            <h1 class="logo">
                <a href="/">
                    <img src="https://www.portotheme.com/magento/porto/skin/frontend/smartwave/porto/images/logo_white_new.png" alt="">

                    {{-- TEA LOGO --}}
                    {{-- <img class="logo-img" style="height:45px"  src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png" alt=""> --}}
                </a>
            </h1>
            <div class="search tw-2/3 thidden md:tflex">
                <nav class="tbg-white tbg-white trounded-l-full trounded-r-full">
                    <div class="nav-wrapper">
                        <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search">
                                <i class="material-icons" style="color:#4299e1;">search</i>
                            </label>
                            <i class="material-icons">close</i>
                        </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="tself-center trelative">
                <a href="{{ route('cart') }}" id="cart" class="btn-floating hover:tbg-white tbg-white">
                    <i class="material-icons" style="color: #4299e1;">shopping_cart</i>
                </a>
                <span id="cart_item_count" class="thidden t-ml-4 t-mt-2 tabsolute tbg-red-500 trounded-full ttext-white" style="z-index: 999;padding: 0px 7px;">1</span>
            </div>
        </div>
    </div>
</div>
