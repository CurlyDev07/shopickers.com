@extends('admin.layouts.app')

@section('content')
    <div id="profile" class="col s12">
        <div class="ttext-2xl ttext-title tfont-medium tpb-4">Products</div>
        <div class="tflex">
            <div class="tw-1/4 tmr-10 trounded-lg">
                <ul class="collection with-header tshadow-lg tm-0 tsticky ttop-0">
                    <li onclick="window.location.href = '/admin/products'" class="collection-item tcursor-pointer waves-block waves-effect hover:tbg-blue-100 {{ is_matched_return_class(url()->current(), url('/').'/admin/products', 'tborder-primary tborder-l-4') }}">
                        <div class="ttext-md ttext-black-100 tmy-1 ">
                            Product List
                            <a class="secondary-content">
                                <i class="fas fa-th-list ttext-primary"></i>
                            </a>
                        </div>
                    </li><!-- PRODUCT LIST -->
                    <li onclick="window.location.href = '/admin/products/add'" class="collection-item tcursor-pointer waves-block waves-effect hover:tbg-blue-100 {{ is_matched_return_class(url()->current(), url('/').'/admin/products/add', 'tborder-primary tborder-l-4 ') }}">
                        <div class="ttext-md ttext-black-100 tmy-1">
                            Add Product
                            <a class="secondary-content">
                                <i class="fas fa-plus-circle ttext-primary"></i>
                            </a>
                        </div>
                    </li><!-- ADD PRODUCT -->
                    <li onclick="window.location.href = '/admin/products/archive'" class="collection-item tcursor-pointer waves-block waves-effect hover:tbg-blue-100 {{ is_matched_return_class(url()->current(), url('/').'/admin/products/archive', 'tborder-primary tborder-l-4 ') }}">
                        <div class="ttext-md ttext-black-100 tmy-1">
                            Archive
                            <a class="secondary-content">
                                <i class="fas fa-file-alt ttext-primary"></i>
                            </a>
                        </div>
                    </li><!-- PRODUCT ARCHIVE -->
                </ul>
            </div><!-- NAV -->
            <div class="tw-3/4">
                @yield('page')
            </div><!-- CONTENT -->
        </div>
    </div>
@endsection
