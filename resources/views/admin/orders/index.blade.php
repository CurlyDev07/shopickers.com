@extends('admin.orders.layouts')


@section('page')
    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100">
        <div class="tborder-b tflex titems-center tjustify-between tpx-5 tpy-3">
            <span class="ttext-base ttext-title tfont-medium">Orders List</span>
            <ul class="tflex titems-center">
                <li class="tmr-4">
                    <form action="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}" class="tflex titems-center">
                        <input type="text" name="search" id="barcode" value="{{ request()->search ?? '' }}" class="browser-default tborder-b tborder-gray-200 tborder-l tborder-t toutline-none tpx-3 tpy-2 trounded-bl trounded-tl" placeholder="Search order number">
                        <button type="submit" class="focus:tbg-white focus:toutline-none grey-text tborder tborder-gray-200 tborder-l-0 tcursor-pointer toutline-none tpx-3 tpy-2 trounded-r-full waves-effect">
                            <i class="fa-flip-horizontal fa-lg fa-search fas"></i>
                        </button>
                    </form>
                </li><!-- SEARCH -->
                <li class="tmr-4 tpt-1">
                    @if (request()->sort == 'asc')
                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}" class="tooltipped" data-position="top" data-tooltip="Sort by newest">
                            <i class="material-icons grey-text tmr-3">sort_by_alpha</i>
                        </a>
                    @else
                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}" class="tooltipped" data-position="top" data-tooltip="Sort by oldest">
                            <i class="material-icons grey-text">sort_by_alpha</i>
                        </a>
                    @endif
                </li><!-- SORT -->
                <li>
                    <a href="/admin/orders/">
                        <img src="{{ asset('icons/clear_filter.png') }}" class="tooltipped" data-position="top" data-tooltip="Remove filter">
                    </a>
                </li>
            </ul>
        </div>
        <div class="tpx-3 tpy-4 tflex tjustify-center">
            <table class="tmb-4 tbg-white ttext-md tw-full">
                <tbody>
                    <tr class="tborder-0">
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Order#</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Name</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Total</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Date</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Status</th>
                        <th class="ttext-left tp-3 tpx-5 ttext-black-100 tfont-medium">Actions</th>
                    </tr>
                    
                    @foreach ($orders as $order)
                        <tr class="tborder-0 hover:tbg-blue-100">
                            <td class="tp-3 tpx-5 ttext-black-100 tfont-medium">#{{ $order['order_number'] }}</td>
                            <td class="tp-3 tpx-5">{{ $order['first_name'] .' '. $order['last_name'] }}</td>
                            <td class="tp-3 tpx-5">{{ $order['payments']['total'] }}</td>
                            <td class="tp-3 tpx-5">{{ $order['payments']['created_at'] }}</td>
                            <td class="tp-3 tpx-5">
                                @if ($order['payments']['payment_status'] == 'completed')
                                    <span class="chip green lighten-5">
                                        <span class="green-text">{{ ucwords($order['payments']['payment_status']) }}</span>
                                    </span>
                                @else
                                    <span class="chip red lighten-5">
                                        <span class="red-text">{{ ucwords($order['payments']['payment_status']) }}</span>
                                    </span>
                                @endif
                            </td>
                            <td class="tp-3 tpx-5">
                                <a href="orders/view/{{ $order->id }}">
                                    <i class="fa-eye fas ttext-2xl ttext-blue-500 tcursor-pointer"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @if (count($orders) < 1)
                        <tr>
                            <td colspan="6">
                                <p class="tfont-medium ttext-center">Orders is empty...</p>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div><!-- TABLE -->

        {{ $orders->appends(request()->except('page'))->links() }}
    </div>
@endsection
