@include('layouts.head')
@include('layouts.nav')
  @yield('nav')

  <div style="background: #f3f5f7" class="relative">
        @yield('content') 
  </div>

@include('layouts.footer')