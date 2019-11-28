@extends('admin.products.layouts')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" integrity="sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=" crossorigin="anonymous" />

    <style>
        .dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed #919eab;
            border-image: none;
        }
        .dropzone .dz-message {
            text-align: center;
            margin: 0;
        }
    </style>
@endsection

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
        <div class="text-sm tfont-medium tpx-5 tpy-4 tmb-1 ttext-title">
            Images
        </div>
        <div class="tflex tpx-5">
            <div id="dropzone" class="dropzone tw-full">
                <div class="dz-message needsclick">    
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/5f3b0e3cd42c85abb313985bb5aa7c32.svg" class="tmx-auto tmb-5" style="height:75px" >
                    <button class="focus:tbg-gray-100 focus:toutline-none  hover:tbg-gray-100 tbg-white  tshadow-md tborder tpx-4 tpy-2 trounded ttext-black-100 ttext-sm waves-effect">
                        Add image
                    </button>
                    <span class="ttext-sm tblock tmt-3">or drop images to upload</span>
                </div>
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
                <input type="checkbox" id="has_variant"/>
                <span class="ttext-black-100" style="font-size: 14px;">This product has multiple options, like different sizes or colors</span>
            </label>
        </div>
        <div class="tborder-t tmt-5 thidden" id="variant-container">
            <div class="tpx-5">
                <div id="varian_options_container">
                    <div class="tflex tjustify-between titems-center">
                        <span class="text-sm tfont-medium tpy-4 ttext-title" style="font-size:14px;">OPTIONS</span>
                        <span class="ttext-sm ttext-red-500 thidden" id="variant_value_validation">
                            <a class="btn-floating pulse tbg-red-500 hover:tbg-red-500"><i class="fas fa-exclamation"></i></a>
                            Please Enter the variant name
                        </span>
                    </div>
                    <div class="tpb-5" data-variant_option="1">
                        <div class="tflex tjustify-between">
                            <span class="text-sm tfont-medium" style="font-size:14px;">Option 1</span>
                            <span class="hover:tunderline tcursor-pointer ttext-blue-600 " style="font-size:14px;"></span>
                        </div>
                        <div class="tflex titems-center">
                            <div class="tw-1/4 tmr-6">
                                <input type="text" value="size" class="browser-default form-control tooltipped" data-position="bottom" data-tooltip="Size, Color, Material, Style, etc." style="padding: 6px; font-size: 14px;">
                            </div>
                            <div class="tw-3/4">
                                <div class="chips chips-placeholder"></div>
                            </div>                           
                        </div>
                    </div>
                    <div class="tborder-t tpt-4 tpb-5 thidden" data-variant_option="2">
                        <div class="tflex tjustify-between">
                            <span class="text-sm tfont-medium" style="font-size:14px;">Option 2</span>
                            <span class="hover:tunderline tcursor-pointer ttext-blue-600 remove_varaint_options" style="font-size:14px;">Remove</span>
                        </div>
                        <div class="tflex titems-center">
                            <div class="tw-1/4 tmr-6">
                                <input type="text" value="color" class="browser-default form-control tooltipped" data-position="bottom" data-tooltip="Size, Color, Material, Style, etc." style="padding: 6px; font-size: 14px;">
                            </div>
                            <div class="tw-3/4">
                                <div class="chips chips-placeholder"></div>
                            </div>                           
                        </div>
                    </div>
                    <div class="tborder-t tpt-4 tpb-5 thidden" data-variant_option="3">
                        <div class="tflex tjustify-between">
                            <span class="text-sm tfont-medium" style="font-size:14px;">Option 3</span>
                            <span class="hover:tunderline tcursor-pointer ttext-blue-600 remove_varaint_options" style="font-size:14px;">Remove</span>
                        </div>
                        <div class="tflex titems-center">
                            <div class="tw-1/4 tmr-6">
                                <input type="text" value="material" class="browser-default form-control tooltipped" data-position="bottom" data-tooltip="Size, Color, Material, Style, etc." style="padding: 6px; font-size: 14px;">
                            </div>
                            <div class="tw-3/4">
                                <div class="chips chips-placeholder"></div>
                            </div>                           
                        </div>
                    </div>
                </div>
                <button id="add_varian_option" class="focus:tbg-gray-100 focus:toutline-none hover:tbg-gray-100 tbg-white tshadow-md tborder tpx-6 tpy-2 trounded ttext-black-100 ttext-sm waves-effect">
                    Add another option
                </button>
            </div>

            <div class="tborder-t tmt-5">
                <div class="text-sm tfont-medium tpx-5 tpy-4 ttext-title">Preview</div>
                <div class="tmt-3">
                    <div class="tflex tjustify-between tpx-5 tborder-b tpb-4">
                        <div class="tfont-medium ttext-black-100 ttext-sm">Variant</div>
                        <div class="tfont-medium ttext-black-100 ttext-sm">Price</div>
                        <div class="tfont-medium ttext-black-100 ttext-sm">Quantity</div>
                        <div class="tfont-medium ttext-black-100 ttext-sm">SKU</div>
                        <div class="tfont-medium ttext-black-100 ttext-sm">Barcode</div>
                        <div class="tfont-medium ttext-black-100 ttext-sm"></div>
                    </div><!-- Variants Headers -->
                    <div class="tflex tjustify-between tpx-5 tborder-b tpy-3">
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <span class="">sm / red / wood</span>
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="number" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="number" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="text" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm">
                            <input type="text" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="tflex titems-center tpl-4 ttext-black-100 ttext-sm">
                            <i class="far fa-trash-alt hover:ttext-red-500 tooltipped" data-position="bottom" data-tooltip="delete variant" style="font-size: 20px;"></i>
                        </div>
                    </div><!-- Variants inputs -->
                    <div class="tflex tjustify-between tpx-5 tborder-b tpy-3">
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <span class="">sm / red / wood</span>
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="number" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="number" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm tmr-3">
                            <input type="text" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="ttext-black-100 ttext-sm">
                            <input type="text" class="browser-default form-control" style="padding: 6px; font-size: 14px;">
                        </div>
                        <div class="tflex titems-center tpl-4 ttext-black-100 ttext-sm">
                            <i class="far fa-trash-alt hover:ttext-red-500 tooltipped" data-position="bottom" data-tooltip="delete variant" style="font-size: 20px;"></i>
                        </div>
                    </div><!-- Variants inputs -->
                </div>
            </div>
        </div>
    </div><!-- Variants -->

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script>
        $(document).ready(function () {
           CKEDITOR.replace( 'description' );
        });
    </script>

{{-- DROPZONE JS CONTROLS --}}
<script>
    var dropzone = new Dropzone('#dropzone', {
        url: '/yeah',
        parallelUploads: 2,
        thumbnailHeight: 120,
        thumbnailWidth: 120,
        maxFilesize: 3,
        filesizeBase: 1000,
        thumbnail: function(file, dataUrl) {
            console.log(file);
            if (file.previewElement) {
                file.previewElement.classList.remove("dz-file-preview");
                var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                for (var i = 0; i < images.length; i++) {
                    var thumbnailElement = images[i];
                    thumbnailElement.alt = file.name;
                    thumbnailElement.src = dataUrl;
                    console.log(dataUrl);
                }   
                    setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
            }
        }
    });
    Dropzone.autoDiscover = false;

</script>


{{-- VARIANTS CONTROLS --}}
<script>

    $(document).ready(function(){

        $('#has_variant').change(function(){
            $('#variant-container').toggle();
        });
        
        function change_the_option_squence_label() {
            $(`[data-variant_option]:not(".thidden")`).each(function(option_count) {
                $(this).children(":first").children(":first").html('Option ' + parseInt(option_count + 1));
            })
        }//change the option label Ex: Option 3


        // ***********************************
        // ADD VARIATION OPTION
        // ***********************************
        $('#add_varian_option').click(function(){
            if ($("[data-variant_option='1']").css('display')  == 'none') {
                $("[data-variant_option='1']").removeClass('thidden');
                change_the_option_squence_label();
                return;
            }

            if ($("[data-variant_option='2']").css('display')  == 'none') {
                $("[data-variant_option='2']").removeClass('thidden');
                change_the_option_squence_label();
                return;
            }

            $("[data-variant_option='3']").removeClass('thidden');
            change_the_option_squence_label();
            $(this).hide();// the minimum variant option is only 3
            return;
        });


        // ***********************************
        // REMOVE VARIATION OPTION
        // ***********************************
        $('.remove_varaint_options').click(function(){
            var varian_option_count = $("[data-variant_option]:not('.thidden')").length - 1; //get the total variant option
            console.log(varian_option_count);
            if (varian_option_count == 2) {
                $('#add_varian_option').show();
            }// limit the addition of variants by 3

            $(this).parent().parent().addClass('thidden');//remove the varaint options

            change_the_option_squence_label();
        
        }); //remove the varaint options


        // ***********************************
        // VARIATION KEY AND VALUES AND CHIPS
        // ***********************************
        var variant_object = [];
        var variant_values = new Array();
        var variant_count = 1;

        $('.chips-placeholder').chips({
            placeholder: 'Enter an options',
            secondaryPlaceholder: '+Options',
            onChipAdd: function (event, chip) {
                var variant_name = event.parent().prev().children().val();//  get the variant_name
                var variant_value = event[0].M_Chips.chipsData.map(obj => {return obj.tag;}); // return the chip variant_values

                // ***********************************************
                // **************** SHOW ERROR MESSAGE **********
                // ***********************************************
                if (variant_name) {
                    $('#variant_value_validation').addClass('thidden');
                }else{
                    $('#variant_value_validation').removeClass('thidden');
                }
                
                // ***********************************************
                // Insert the key and values in variant object
                // ***********************************************
                variant_object[variant_name] = variant_value; 

                constract_variant_array_of_object(variant_object);
            },
            onChipDelete: function (event, chip) {
                var variant_name = event.parent().prev().children().val();//  get the variant_name
                var variant_value = event[0].M_Chips.chipsData.map(obj => {return obj.tag;}); // return the chip variant_values
                
                // GET ALL THE INDEX OF $variant_name from $variant_values 
                let tobe_deleted_index = new Array();
                Object.getOwnPropertyNames(variant_values).forEach(key_num=>{
                    Object.getOwnPropertyNames(variant_values[key_num]).forEach(key_variant=> {
                        if (key_variant == variant_name) {
                            tobe_deleted_index.push(key_num);
                        }
                    })
                });

                // DELETE ALL data base on get indexs
                variant_values.splice(tobe_deleted_index[0], (tobe_deleted_index.length));
                variant_object[variant_name] = variant_value; 
                constract_variant_array_of_object(variant_object);
            }
        }); 

        function constract_variant_array_of_object(variant_obj) {
            let varaints = Object.assign({}, variant_obj);
            $.post( "/admin/variant", { varaints })
            .done(function( data ) {
                console.log(data); 
            });
        } 
    })
     
</script>

@endsection
