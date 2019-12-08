@extends('layouts.app')

@section('content')
    <div class="col s12 tmb-8 tpx-0 tbg-white">
        <div class="tcontainer py-8">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#profile">Profile</a></li>
                <li class="tab col s3"><a href="#orders">Order</a></li>
                <li class="tab col s3"><a href="#wishlist">Wishlist</a></li>
                {{-- <li class="tab col s3"><a href="#address">Address Book</a></li> --}}
            </ul>
        </div>
    </div>

    <div class="tcontainer py-8">
        <div class="ttext-black-100 tpb-8">
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