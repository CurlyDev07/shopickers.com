@include('layouts.head')
@include('layouts.nav')
  @yield('nav')

  <div style="background: #f3f5f7;scroll-behavior: smooth;" class="tsticky ttop-0 sm:trelative tpb-5">
    @yield('content') 
  </div>

  <div id="loader" class="tabsolute th-full thidden tleft-0 ttop-0 tw-full" style="z-index: 999;background-color: rgba(187, 187, 187, 0.1);">
    <div class="tfixed tflex th-full titems-center tjustify-center tw-full">
      <div class="trelative">
        <img src="{{ url('loader/cart.svg') }}">
        <img src="{{ url('loader/progressbar.svg') }}" class="tabsolute" style="top: 52%;left: 40%;">
      </div>
    </div>
  </div>

@include('layouts.footer')