@include('admin.layouts.head')
@include('admin.layouts.nav')

    <div style="background-color: #f3f5f7;min-height: 100vh;">
        <div class="tcontainer tpy-8">
            @yield('content')
        </div> 
    </div>
     
@include('admin.layouts.footer')
