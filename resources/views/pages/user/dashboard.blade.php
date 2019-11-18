@extends('layouts.app')

@section('css')
    <style>
        
    </style>    
@endsection

@section('content')
    <div class="col s12 l7 tpx-0">
        <ul class="tabs t-mt-8">
            <li class="tab col s3"><a class="active" href="#profile">Profile</a></li>
            <li class="tab col s3"><a href="#orders">Order</a></li>
            <li class="tab col s3"><a href="#wishlist">Wishlist</a></li>
            {{-- <li class="tab col s3"><a href="#address">Address Book</a></li> --}}
        </ul>
    </div>
</div><!-- Close the container -->


<div class="t-mt-8"  style="background-color: #f3f5f7;">
    <div class="tcontainer tpy-8 ttext-black-100">
       @include('pages.user.profile')
       @include('pages.user.orders')
       @include('pages.user.wishlist')
       {{-- @include('pages.user.address') --}}
    </div>
</div>


@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.tabs').tabs({
                // swipeable: true
            });
        });
            
            
    </script>
@endsection