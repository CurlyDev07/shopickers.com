@extends('admin.products.layouts')

@section('page')
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100">
        <div class="tborder-b text-base tfont-medium tpx-5 tpy-4 t ttext-title">
            Add Product
        </div>
        <div class="tflex tpx-5 tpt-5">
            <div class="tw-full tflex tflex-col tmr-2">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Title</label>
                <input type="text" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
        </div>
        <div class="tflex tpx-5 tpt-5">
            <div class="tw-full tflex tflex-col tmr-2">
                <label for="description" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Description</label>
                <textarea id="description" class="browser-default form-control" name="description" rows="5" style="padding: 6px;"></textarea>
            </div>
        </div>
    </div>
    
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 t ttext-title">
            Pricing
        </div>
        <div class="tflex tpx-5">
            <div class="tw-1/2 tflex tflex-col tmr-3">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Price</label>
                <input type="number" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
            <div class="tw-1/2 tflex tflex-col tml-3">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Compare at price</label>
                <input type="number" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
        </div>
    </div>
    
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 t ttext-title">
            Inventory
        </div>
        <div class="tflex tpx-5">
            <div class="tw-1/2 tflex tflex-col tmr-3">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">SKU (Stock Keeping Unit)</label>
                <input type="number" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
            <div class="tw-1/2 tflex tflex-col tml-3">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">Barcode (ISBN, UPC, GTIN, etc.)</label>
                <input type="text" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
        </div>
        <div class="tflex tpx-5 tpt-4">
            <div class="tw-1/2 tflex tflex-col tmr-3 tpr-3">
                <label for="title" class="tfont-normal ttext-sm tmb-2 ttext-black-100">QUANTITY</label>
                <input type="number" id="title" class="browser-default form-control" style="padding: 6px;">
            </div>
        </div>
    </div>
    
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100 tmt-5">
        <div class="text-sm tfont-medium tpx-5 tpy-4 ttext-title">Variants</div>
        <div class="text-sm tpx-5">
            <label>
                <input type="checkbox" />
                <span class="ttext-black-100" style="font-size: 14px;">This product has multiple options, like different sizes or colors</span>
            </label>
        </div>
        <div class="tborder-t tmt-5 tpx-5" id="variant">
            <div class="text-sm tfont-medium tpy-4 ttext-title" style="font-size:14px;">OPTIONS</div>
            <div class="tpb-5">
                <div class="tflex tjustify-between">
                    <span class="text-sm tfont-medium" style="font-size:14px;">Option 1</span>
                    <span class="hover:tunderline tcursor-pointer ttext-blue-600" style="font-size:14px;">Remove</span>
                </div>
                <div class="tflex titems-center tmt-4">
                    <div class="tw-1/4 tmr-6">
                        <input type="text" id="title" class="browser-default form-control" value="size" style="padding: 6px; font-size: 14px;">
                    </div>
                    <div class="tw-3/4">
                        <div class="chips tmy-0"></div>
                    </div>                           
                </div>
                
            </div>
            <div class="tborder-t tpt-4 tpb-5">
                <div class="tflex tjustify-between">
                    <span class="text-sm tfont-medium" style="font-size:14px;">Option 2</span>
                    <span class="hover:tunderline tcursor-pointer ttext-blue-600" style="font-size:14px;">Remove</span>
                </div>
                <div class="tflex titems-center tmt-4">
                    <div class="tw-1/4 tmr-6">
                        <input type="text" id="title" class="browser-default form-control" value="size" style="padding: 6px; font-size: 14px;">
                    </div>
                    <div class="tw-3/4">
                        <div class="chips tmy-0"></div>
                    </div>                           
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        $('.chips').chips({
            data: [
                {
                    tag: 'small',
                }
            ]
        });
        CKEDITOR.replace( 'description' );
    </script>

@endsection