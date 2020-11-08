@extends('admin.orders.layouts')

@section('css')
    <style>
        .autocomplete-content img {
            display: none;
        }
        .modal .modal-content {
            height: 50vh;
        }
    </style>
@endsection

@section('page')
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100">
        <div class="tborder-b text-base tfont-medium tpx-5 tpy-4 t ttext-title">
            Create Order
        </div>
        <div class="tflex tpx-5 tpt-5">
            <div class="tw-full tflex tflex-col tmr-2">
                <label for="product" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Product</label>
                <select name="" id="product" class="tcursor-pointer browser-default form-control" style="padding: 6px;">
                    <option value="" data-price="" selected>Choose product ...</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->title }}</option>
                    @endforeach
                </select>
            </div><!-- Product Text -->

        </div>
    </div><!-- Product -->

    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 t ttext-title">
            Pricing
        </div>
        <div class="tflex tpx-5">
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="price" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Price</label>
                <input type="text" onkeyup="allnumeric(this)" value="0" id="price" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Price -->
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="quantity" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Quantity</label>
                <select name="" id="quantity" class="tcursor-pointer browser-default form-control" style="padding: 6px;">
                    @for ($qty = 1; $qty < 50; $qty++)
                        <option value="{{ $qty }}">{{ $qty }}</option>
                    @endfor
                </select>
            </div>
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="total" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Total</label>
                <input type="text" onkeyup="allnumeric(this)" id="total" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Total -->
        </div>
    </div><!-- Pricing -->

    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 t ttext-title">
            Transaction
        </div>
        <div class="tflex tpx-5">
            <div class="tw-1/2 tflex tflex-col tmr-3">
                <label for="sold_from" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Sold from</label>
                <select name="" id="sold_from" class="tcursor-pointer browser-default form-control" style="padding: 6px;">
                    @foreach ($sold_from as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="tw-1/2 tflex tflex-col tmr-3">
                <label for="payment_method" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Payment method</label>
                <select name="" id="payment_method" class="tcursor-pointer browser-default form-control" style="padding: 6px;">
                    @foreach ($payment_method as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div><!-- Pricing -->

    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 t ttext-title">
            Customer Information
        </div>
        <div class="tflex tpx-5">
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="first_name" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Name</label>
                <input type="text" id="first_name" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Name -->
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="last_name" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Surname</label>
                <input type="text" id="last_name" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Surname -->
            <div class="tw-1/3 tflex tflex-col tmr-3">
                <label for="phone_number" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Phone number</label>
                <input type="text" onkeyup="allnumeric(this)" id="phone_number" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Phone number -->
        </div>
        <div class="tflex tpx-5 tmt-3">
            <div class="tw-full tflex tflex-col tmr-3">
                <label for="address" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Address</label>
                <input type="text" id="address" class="browser-default form-control" style="padding: 6px;">
            </div><!-- Address -->
        </div>
        <div class="tflex tpx-5 tmt-3">
            <div class="tw-full tflex tflex-col tmr-3">
                <label for="fb_link" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Facebook_link</label>
                <input type="text" id="fb_link" class="browser-default form-control" style="padding: 6px;">
            </div><!-- FB LINK -->
        </div>

    </div><!-- Customer Information -->

    <div class="tflex tjustify-end tpy-5 trounded-lg 100 tmt-5">
        <button class="focus:tbg-primary tbg-primary tml-auto tpy-2 trounded ttext-white tw-24 waves-effect" id="submit_btn">Save</button>
    </div><!-- Save -->

    <!-- Modal Structure -->
    <div id="err_msg_modal" class="modal modal-fixed-footer">
        <div class="modal-content tbg-white">
            <div class="ttext-center tmb-5">
                <a class="btn-floating pulse tbg-red-500 hover:tbg-red-500"><i class="fas fa-exclamation"></i></a>
                <h4 class="ttext-lg">Ooops</h4>
            </div>
            <ul class="modal_err_msg">
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" id class="modal-close waves-effect waves-light btn-flat ttext-white" style="background: #f65656;">Okay</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweatalert.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();// initiate modal

            $('#product').change(function(){
                let selected = $('#product option:selected');
                $('#price').val(selected.data('price'));
                updateTotalPrice();// update total Price
            });
            
            $('#price').change(()=>{
                updateTotalPrice();
            });// update total Price
            
            $('#quantity').change(()=>{
                updateTotalPrice();
            });// update total Price

            function updateTotalPrice() {
                let price = $('#price').val();
                let quantity = $('#quantity').val();
                $('#total').val(price*quantity);
            }// update total Price

            $('#submit_btn').click(()=>{
                $('#submit_btn').attr('disabled', 'true');
                progress_loading(true);// show loader

                $.post( "/admin/orders/store", {
                    'product': $('#product').val(),
                    'price': $('#price').val(),
                    'quantity': $('#quantity').val(),
                    'total': $('#total').val(),
                    
                    'sold_from': $('#sold_from').val(),
                    'payment_method': $('#payment_method').val(),

                    'first_name': $('#first_name').val(),
                    'last_name': $('#last_name').val(),
                    'phone_number': $('#phone_number').val(),
                    'address': $('#address').val(),
                    'fb_link': $('#fb_link').val(),
                })
                .fail(function(response) {
                    $('#submit_btn').removeAttr('disabled');
                    progress_loading(false);// show loader

                    let errDecoded = JSON.parse(response.responseText);
                    let markup = '';

                    if (errDecoded.errors < 1) {
                        return;
                    }

                    $('#err_msg_modal').modal('open'); 
                    $.each(errDecoded.errors, function (key, val) {
                        markup +=   `<li class="tmb-3" style="color:#f65656;">
                                        <i class="fas fa-dot-circle tmr-3"></i>
                                        ${val}
                                    </li>`;

                    });
                    $('.modal_err_msg').html(markup);
                
                    console.log(errDecoded);
                })
                .done(function( res ) {
                    $('#submit_btn').removeAttr('disabled');
                    progress_loading(false);// show loader

                    Swal.fire({
                        icon: 'success',
                        title: 'Awesome',
                        text: 'Added Successfuly',
                    });
                    // window.location.reload();
                });
            })
        });  

    </script>
@endsection