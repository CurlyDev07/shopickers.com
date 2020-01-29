<div id="orders" class="col s12">
    <div class="ttext-2xl ttext-title tfont-medium tpb-4">Order History</div>

    <div class="tbg-white tpb-5 trounded-lg tshadow-lg ttext-black-100">
        <div class="tborder-b tflex titems-center tjustify-between tpx-5 tpy-4">
            <span class="ttext-base ttext-title tfont-medium">Order List</span>
            <ul class="tflex">
                {{-- <li class="">
                    <i class="material-icons grey-text">delete</i>
                </li>
                <li class="ttext-center">
                    <i class="material-icons grey-text">sort</i>
                </li> --}}
                <li class="ttext-center">
                    <i class="material-icons grey-text">more_vert</i>
                </li>
            </ul>
        </div>
        <div class="tpx-3 tpy-4 tflex tjustify-center">
            <table class="tmb-4 tbg-white ttext-md tw-full centered">
                <tbody>
                    <tr class="tborder-0">
                        <th class="ttext-center tp-3 tpx-5 ttext-black-100 tfont-medium">Order #</th>
                        <th class="ttext-center tp-3 tpx-5 ttext-black-100 tfont-medium">Photo</th>
                        <th class="ttext-center tp-3 tpx-5 ttext-black-100 tfont-medium">Name</th>
                        <th class="ttext-center tp-3 tpx-5 ttext-black-100 tfont-medium">Total</th>
                        <th class="ttext-center tp-3 tpx-5 ttext-black-100 tfont-medium">status</th>
                    </tr>
                    @foreach ($orders as $order)
                        {{-- {{ dd($order['products'][0]) }} --}}

                        <tr class="tborder-0 hover:tbg-gray-100">
                        <td class="tp-3 tpx-5 ttext-black-100 tfont-medium"># {{ $order['order_number'] }}</td>
                            <td class="tp-3 tpx-5">
                                <img src="http://127.0.0.1:8000/images/products/d3c33ad3-4725-42d3-abda-e1f0db1a0116.jpg" class="tmx-auto" style="height: 50px;width: 50px;">
                            </td>
                            <td class="tp-3 tpx-5">
                                <a href="{{ route('dashboard.order.view', ['transaction_id' => $order['id']]) }}" target="_blank" class="hover:tunderline ttext-blue-500">
                                    @foreach ($order['products'] as $index =>  $product)
                                    {{ $product['product']['title'] }} 
                                    @if (count($order['products']) != ($index + 1))
                                        /
                                    @endif
                                    @endforeach
                                </a>
                            </td>
                            <td class="tp-3 tpx-5">₱{{ number_format($order['payments']['total'], 2) }}</td>
                            <td class="tp-3 tpx-5">
                                @if ($order['payments']['payment_status'] == 'approved')
                                    <span class="chip green lighten-5 waves-effect waves-green status" style="cursor: pointer;">
                                        <span class="green-text" style="cursor: pointer;">{{ $order['payments']['payment_status'] }}</span>
                                    </span>
                                @else
                                    <span class="chip red lighten-5 waves-effect waves-red status" style="cursor: pointer;">
                                        <span class="red-text">{{ $order['payments']['payment_status'] }}</span>
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>