@extends('layouts.app')

@section('content')

    <div class="tcontainer tpy-8">

        <h1 class="tfont-medium tmb-4  ttext-blue-500 ttext-xl">LOGIN OR CREATE AN ACCOUNT</h1>

        <div class="tbg-white tflex tflex-col md:tflex-row md:tp-8 tpx-5 tpy-8  tmb-10 tborder" style="border-top: 4px solid #4299e1;">
            <div class="md:tw-1/2 torder-last md:torder-first tflex tflex-wrap tjustify-end md:tmr-5 md:tpx-8 md:tpx-4 tpx-3 tpy-2">
                <div class="">
                    <h2 class="ttext-gray-700 ttext-xl tmb-4">New Customers</h2>
        
                    <p class="ttext-sm ttext-gray-600 tleading-relaxed ttracking-wider">
                        By creating an account with our store, you will be able to move through
                        the checkout process faster, store multiple shipping addresses, view and track your
                        orders in your account and more.
                    </p>
                </div>
                <a href="{{ route('signup') }}" class="tself-end tbg-blue-500 focus:tbg-blue-500 waves-effect tpx-5 tmt-6 md:tmt-0 tpy-3 ttext-white">Create an Account</a>
            </div>
            <div class="md:tw-1/2 md:tml-5 tpy-2">
                <div class="row tmb-3">
                    <div class="col s12">
                        <h2 class="ttext-gray-700 ttext-xl tmb-4">Login</h2>
                        <p class="ttext-sm ttext-gray-600 tleading-relaxed ttracking-wider">If you have an account with us, please log in.</p>
                    </div>
                </div>

                <form action="javascript:void(0)">
                    <div class="row tmb-0">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="tflex tjustify-between tpx-2">
                        <a href="" class="hover:tunderline ttext-blue-500">Forgot Your Password?</a>
                        <button class="tbg-blue-500 focus:tbg-blue-500 waves-effect tpx-5 tpt-2 tpb-3 ttext-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection