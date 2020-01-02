@extends('layouts.app')

@section('content')

    <div class="tcontainer tpy-12">
        <div class="tflex tjustify-center">
            <div class="tw-2/5 tbg-white tp-8 trounded">
                <div class="ttext-center">
                    <i class="far fa-check-circle fa-5x" style="color:#1dc150;"></i>
                    <div class="tfont-medium ttext-3xl ttext-title">Payment Successful</div>
                </div>
                <p class="tmt-5">
                    Thank you for your purchase! Please save the
                    order number and the total amount or <u>take a
                    picture of this receipt</u> for your future reference.
                </p>
                <div class="tflex tjustify-around tmt-5">
                    <div class="">
                        <div class="">Order #:</div>
                        <div class="tfont-medium">{{ $order_number }}</div>
                    </div>
                    <div class="">
                        <div class="">Total Amount</div>
                        <div class="tfont-medium">₱{{ $total_amount }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection