@include('layouts.head')
@include('layouts.nav')
  @yield('nav')

  <div class="tcontainer tpt-5">
    @yield('content')
  </div>  

@include('layouts.footer')