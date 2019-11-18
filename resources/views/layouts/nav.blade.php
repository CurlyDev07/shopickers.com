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
                    <li class="hover:tunderline tmr-8 tcursor-default">MY ACCOUNT</li>
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
                <input type="text" class="browser-default tappearance-none tborder-gray-300 trounded-l-full tw-full tpy-2 tpx-4 ttext-gray-700 tleading-tight tfocus:outline-none tfocus:bg-white tfocus:border-white"  placeholder="Search ...">
                
                <div class="trelative">
                    <select class="browser-default tblock tappearance-none ttext-gray-700 tpy-3 tpx-4 tpr-8 tleading-tight tfocus:outline-none tborder-l" id="grid-state">
                        <option>New Mexico</option>
                        <option>Missouri</option>
                        <option>Texas</option>
                    </select>
                    <div class="tpointer-events-none tabsolute tinset-y-0 tright-0 tflex titems-center tpx-2 ttext-gray-700">
                        <svg class="tfill-current th-4 tw-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>

                <button class="waves-effect browser-default focus:tbg-blue-600 tbg-blue-500 tappearance-none tborder-2 tborder-gray-300 trounded-r-full tpy-2 tpx-4 ttext-gray-700 tleading-tight tfocus:outline-none tfocus:bg-blue-600 tfocus:border-white">
                    <i class="fas fa-search ttext-white"></i>
                </button>
            </div>
            <div class="tself-center">
                <a href="{{ route('cart') }}"><i class="fas fa-shopping-cart fa-2x ttext-white"></i></a>
            </div>
        </div>
    </div>
</div>
