@extends('layouts.app')

@section('content')

    <div class="tcontainer tpy-8">

        <h1 class="tfont-medium tmb-4  ttext-primary ttext-xl">LOGIN OR CREATE AN ACCOUNT</h1>

        <div class="md:tflex-row md:tp-8 tbg-white tborder-primary tborder-t-4 tflex tflex-col tmb-10 tpx-5 tpy-8">
            <div class="md:tw-1/2 torder-last md:torder-first tflex tflex-wrap tjustify-end md:tmr-5 md:tpx-8 md:tpx-4 tpx-3 tpy-2">
                <div class="">
                    <h2 class="ttext-gray-700 ttext-xl tmb-4">New Customers</h2>
        
                    <p class="ttext-sm ttext-gray-600 tleading-relaxed ttracking-wider">
                        By creating an account with our store, you will be able to move through
                        the checkout process faster, store multiple shipping addresses, view and track your
                        orders in your account and more.
                    </p>
                </div>
                <a href="{{ route('register') }}" class="tself-end tbg-primary focus:tbg-primary waves-effect tpx-5 tmt-6 md:tmt-0 tpy-3 ttext-white">Create an Account</a>
            </div>
            <div class="md:tw-1/2 md:tml-5 tpy-2">
                <div class="row tmb-3">
                    <div class="col s12">
                        <h2 class="ttext-gray-700 ttext-xl tmb-4">Login</h2>
                        <p class="ttext-sm ttext-gray-600 tleading-relaxed ttracking-wider">If you have an account with us, please log in.</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row tmb-0">
                        <div class="input-field col s12">
                            <input id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>
                            @error('email')
                                <small class="ttext-error right">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" value="{{ old('password') }}" required>
                            <label for="password">Password</label>
                            @error('password')
                                <small class="ttext-error right">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="tflex tjustify-end tpx-2">
                        {{-- <a href="" class="hover:tunderline ttext-primary">Forgot Your Password?</a> --}}
                        <button type="submit" class="tbg-primary focus:tbg-primary waves-effect tpx-5 tpt-2 tpb-3 ttext-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection