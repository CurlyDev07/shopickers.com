<div id="orders" class="col s12">
    <div class="ttext-2xl ttext-title tfont-medium tpb-4">Order History</div>

    <div class="tbg-white tpx-8  tpb-8 tpt-5">
        <div class="tflex">
            <table class="sresponsive-table">
                <thead>
                    <tr>
                        <th class="ttext-left">Item</th>
                        <th class="ttext-center">Price</th>
                        <th class="ttext-center">Qty</th>
                        <th class="ttext-center">Status</th>
                    </tr>
                </thead>
        
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="">
                            <td class="tp-1 tp-3">
                                <div class="md:tflex titems-center">
                                    <img class="tblock lg:thidden tmr-3 th-12" src="http://www.portotheme.com/magento/porto/media/catalog/product/cache/7/thumbnail/80x80/9df78eab33525d08d6e5fb8d27136e95/2/_/2_14_2.jpg" alt="">
                                    <img class="thidden lg:tblock tmr-3" src="http://www.portotheme.com/magento/porto/media/catalog/product/cache/7/thumbnail/80x80/9df78eab33525d08d6e5fb8d27136e95/2/_/2_14_2.jpg" alt="">
                                    <a href="" class="ttext-blue-500 hover:tunderline" style="text-align: left">Huawei Y6 Pro 2019 32GB — 3GB 6.09 inches HD+ Screen Smart Phone</a>
                                </div>
                            </td>
                            <td class="ttext-center">99</td>
                            <td class="tp-1 ttext-center">
                                3
                            </td>
                            <td class="ttext-black-100 ttext-center"><small><b>Delivered</b> (jul 01, 2019)</small> </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        
        <div class="thidden md:tflex md:tjustify-end titems-center tpt-5 tmt-3">
            <a href="javascript:void(0)" class="hover:tbg-blue-500 hover:ttext-white tborder tpx-4 tpy-2 ttext-gray-700 ttext-sm waves-effect">Continue Shopping</a>
        </div>
    </div>
</div>