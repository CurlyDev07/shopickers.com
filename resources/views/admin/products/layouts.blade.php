@extends('admin.layouts.app')

@section('content')
    
    <div id="profile" class="col s12">
        <div class="ttext-2xl ttext-title tfont-medium tpb-4">Products</div>
        <div class="tflex">
            <div class="tw-1/4 tmr-10 trounded-lg">
                <ul class="collection with-header tshadow-lg tm-0 tsticky ttop-0">
                    <li class="collection-item">
                        <div class="ttext-md ttext-black-100">
                            Product List
                            <a href="#!" class="secondary-content">
                                <i class="fas fa-th-list ttext-blue-500"></i>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="ttext-md ttext-black-100">
                            Add Product
                            <a href="#!" class="secondary-content">
                                <i class="fas fa-plus-circle ttext-blue-500"></i>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="ttext-md ttext-black-100">
                            Alvin
                            <a href="#!" class="secondary-content">
                                <i class="fas fa-th-list ttext-blue-500"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div><!-- NAV -->
            <div class="tw-3/4">
                @yield('page')
            </div><!-- CONTENT -->
        </div>
    </div>
@endsection
