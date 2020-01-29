@extends('layouts.app')

@section('content')
    <div class="tcontainer tpy-8">

        <h1 class="tfont-medium tmb-4 tmt-2 ttext-primary ttext-xl">CREATE AN ACCOUNT</h1>

        <div class="tbg-white md:tp-8 tpx-5 tpy-8  tmb-10 tborder-primary tborder-t-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <h2 class="ttext-gray-700 ttext-xl tmb-4 ttext-gray-500">PERSONAL INFORMATION</h2>
                <div class="row tmb-0">
                    <div class="input-field col s6 ttext-right">
                        @error('first_name')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}">
                        <label for="first_name">First Name</label>
                    </div><!-- First Name -->

                    <div class="input-field col s6 ttext-right">
                        @error('last_name')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}">
                        <label for="last_name">Last Name</label>
                    </div><!-- Last Name -->
                    
                </div>
                <div class="row tmb-0">
                    <div class="input-field col s12 m6 ttext-right">
                        @error('email')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="email" type="text" name="email" value="{{ old('email') }}">
                        <label for="email">Email Address</label>
                    </div><!-- Email Address -->

                    <div class="input-field col s12 m6 ttext-right">
                        @error('contact_number')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="contact_number" type="text" name="contact_number" value="{{ old('contact_number') }}">
                        <label for="contact_number">Contact Number</label>
                    </div><!-- Contact Number -->
                </div>
                <div class="row">
                    <div class="input-field col s6 ttext-right">
                        @error('password')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="password" type="password" name="password" value="{{ old('password') }}">
                        <label for="password">Password</label>
                    </div><!-- Password -->

                    <div class="input-field col s6 ttext-right">
                        @error('password_confirmation')
                            <small class="ttext-error">{{ $message }}</small>
                        @enderror
                        <input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                </div>
                <div class="tflex tjustify-end titems-center tpx-2">
                    <button type="submit" class="tbg-primary focus:tbg-primary waves-effect tpx-5 tpt-2 tpb-3 ttext-white focus:toutline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection