@extends('admin.products.layouts')


@section('page')
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100">
        <div class="tborder-b tflex titems-center tjustify-between tpx-5 tpy-4">
            <span class="ttext-base ttext-title tfont-medium">Product List</span>
            <ul class="tflex">
                <li>
                    <i class="material-icons grey-text tmr-3">delete</i>
                </li>
                <li>
                    <i class="material-icons grey-text tmr-3">sort</i>
                </li>
                <li>
                    <i class="material-icons grey-text">more_vert</i>
                </li>
            </ul>
        </div>
        <div class="tpx-3 tpy-4 tflex tjustify-center">
            <table class="tmb-4 tbg-white ttext-md tw-full">
                <tbody>
                    <tr class="tborder-0">
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">ID</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Photo</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Name</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Price</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Qty</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Actions</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr class="tborder-0 hover:tbg-blue-100" onclick="item_show('{{ item_show_slug($product['title'], $product['id']) }}')">
                            <td class="tp-3 tpx-5 ttext-black-100 tfont-medium">#{{ $product['id'] }}</td>
                            <td class="tp-3 tpx-5">
                                <img src="{{ $product['images'][0]['img'] }}" style="height: 50px;width: 50px;">
                            </td>
                            <td class="tp-3 tpx-5">{{ $product['title'] }}</td>
                            <td class="tp-3 tpx-5">₱{{ number_format($product['price']) }}</td>
                            <td class="tp-3 tpx-5">{{ $product['qty'] ?? 'not set'  }}</td>
                            <td class="tp-3 tpx-5">
                                <button type="button" class="tmr-3 ttext-sm tbg-blue-500 hover:tbg-blue-700 ttext-white tpy-1 tpx-2 trounded focus:toutline-none focus:tshadow-outline">Save</button>
                                <button type="button" class="ttext-sm tbg-red-500 hover:tbg-red-700 ttext-white tpy-1 tpx-2 trounded focus:toutline-none focus:tshadow-outline">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection
