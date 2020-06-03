
    <div id="footer" class="tbg-gray-900 tpt-8 sm:tpt-16 tpb-20 sm:tpb-8">
        <div class="tcontainer">
            <div class="sm:tflex">
                <div class="tw-full md:tw-1/2 lg:tw-1/3 ttext-white">
                   <div class="tblock">
                        <h3 class="ttext-center sm:ttext-left ttext-white tfont-medium ttext-base tmb-4">CONTACT INFORMATION</h3>
                   </div>
                   <ul class="tmb-5 ttext-center sm:ttext-left">
                       <li class="tmb-3">
                            <span class="ttext-sm">ADDRESS</span>
                            <p class="ttext-xs ttext-gray-500">123 Street Name, City, England</p>
                       </li>
                       <li class="tmb-3">
                            <span class="ttext-sm">PHONE</span>
                            <p class="ttext-xs ttext-gray-500">(123) 456-7890</p>
                       </li>
                       <li class="tmb-3">
                            <span class="ttext-sm">EMAIL</span>
                            <p class="ttext-xs ttext-gray-500">mail@example.com</p>
                       </li>
                       <li class="tmb-3">
                            <span class="ttext-sm">WORKING DAYS/HOURS</span>
                            <p class="ttext-xs ttext-gray-500">Mon - Sun / 9:00AM - 8:00PM</p>
                       </li>
                    </ul>

                    <ul class="tflex tjustify-center sm:tjustify-start tmb-8 sm:tmb-0">
                        <li class="tmr-4">
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="tmr-4">
                            <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
                        </li>
                        <li class="">
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="tw-full md:tw-1/2 lg:tw-full ttext-white">
                    <div class="tw-full tflex tflex-wrap tmb-8">
                        <div class="w-full sm:tw-1/2">
                            <div class="tblock">
                                <h3 class="ttext-white tfont-medium ttext-base tmb-4">CONTACT INFORMATION</h3>
                                <p class="ttext-xs ttext-gray-500">
                                    Get all the latest information on Events, Sales and Offers. <br>
                                    Sign up for newsletter today.
                                </p>
                            </div>
                        </div>
                        <div class="w-full sm:tw-1/2 tflex titems-end thidden lg:tflex">
                            <input type="email" class="browser-default tpx-4 tpy-3 tw-2/3 ttext-black">
                            <button type="button" class="tborder-0 focus:tbg-blue-600 waves-effect tpx-4 tpy-3 tw-1/4 tbg-primary hover:tbg-blue-600">SUBCRIBE</button>
                        </div>
                    </div>
                    <div class="tw-full tflex tflex-wrap tborder-gray-700 tborder-t tpy-8">
                        <div class="tw-1/2">
                            <div class="tblock">
                                <h3 class="ttext-white tfont-medium ttext-base tmb-4">MY ACCOUNT</h3>
                                <div class="tflex">
                                    <div class="tw-1/2">
                                        <ul>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">Order history</a></li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">Cart</a></li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">My Account</a></li>
                                        </ul>
                                    </div>
                                    <div class="tw-1/2">
                                        <ul>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">Forgot Password</a></li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">Login</a></li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2 hover:tunderline"><a href="">Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- MY ACCOUNT-->
                        <div class="tw-1/2">
                            <div class="tblock">
                                <h3 class="ttext-white tont-medium ttext-base tmb-4">PRODUCTS</h3>
                                <div class="tflex">
                                    <div class="tw-1/2">
                                        <ul>
                                            <li class="ttext-xs ttext-gray-500 tmb-2">Gamepad</li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2">Phone Cases</li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2">Electric Guitar</li>
                                        </ul>
                                    </div>
                                    <div class="w-1/2">
                                        <ul>
                                            <li class="ttext-xs ttext-gray-500 tmb-2">Dual Stand</li>
                                            <li class="ttext-xs ttext-gray-500 tmb-2">IPhone</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- MAIN FEATURES-->
                    </div>

                </div>
            </div>

            <hr class="tmt-10 tmb-8">

            <div class="tflex tjustify-between titems-center ttext-white">
                <small class="ttext-xs">© Porto eCommerce. 2019. All Rights Reserved</small>
                <div class="ttext-xs">
                    <img src="http://www.portotheme.com/magento/porto/media/wysiwyg/smartwave/footer/payment-icon.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <footer>
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ asset('js/materialize.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"  crossorigin="anonymous"></script>
        @yield('js')
        
        <script>
            function addToCart(){
                $.get( "{{ route('cart.count') }}", function( count ) {
                    if (count > 0) {
                        $('.cart_item_count').removeClass('thidden').html(count);
                    }
                });
            }
            addToCart();

            
            // ADD TO CART
            $('.add_to_cart').click(function () {
                let id = $(this).data('id');
                $.get( "cart/add/" + id, function( data ) {
                    Swal.fire({
                        icon: 'success',
                        title: 'item has been added to your shopping cart',
                        showConfirmButton: false,
                        timer: 2500,
                        showClass: {
                            popup: 'animated tada fast'
                        },
                        hideClass: {
                            popup: 'animated fadeOut slow'
                        }
                    })

                    // ADD TO CART
                    $('#cart').addClass('pulse'); // trigger pulse on added cart
                    addToCart();// Update cart item count
                });
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </footer>

   
</body>
</html>