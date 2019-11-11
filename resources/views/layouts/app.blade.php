@include('layouts.head')
@include('layouts.nav')
  @yield('nav')

  <div class="tcontainer tpy-8">
    @yield('content')
  </div>  

@include('layouts.footer')