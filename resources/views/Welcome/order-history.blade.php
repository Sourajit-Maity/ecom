<x-layouts.welcome-layout>
    <section class="order-history cmn-gap2">
        <div class="container">
            

            <div class="order-table">
                <h2>Order History</h2>

                <table>
                 <thead>
                        <tr>
                            <th>date</th>
                            <th>Order ID</th>
                            <th>status</th>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($orders) > 0)
                            @foreach ($orders as $order)
                    <tr>
        
                        <td>{!! \Carbon\Carbon::parse($order->created_at)->format('d M Y') !!}</td>
                        <td>##{{ $order->id }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <div class="image-wraper">
                                <div class="order-image">
                                    <img src="{{ $order->image }}" alt="">
                                    <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            $ {{ $order->payment_price }}
                        </td>
                    </tr>
                    @endforeach
                        @else
                            <tr>
                                <td colspan="7">No entries in table</td>
                            </tr>
                        @endif
                    </tbody>
                   
                </table>
            </div>

            <div class="pagination">
                <ul>
                    <!-- <li>{!! $orders->appends(['sort' => 'id'])->links() !!}</li>                    -->
                    <li>{{ $orders->links('vendor.pagination.custom') }}</li>
                </ul>
            </div>
           

        </div>
    </section>

</x-layouts.welcome-layout>