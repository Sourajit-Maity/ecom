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
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <div class="image-wraper">
                                <div class="order-image">
                                    <img src="{{asset('welcome_assets/images/order01.png')}}" alt="">
                                    <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                                </div>
                                <div class="order-name">
                                    <p>Plastic Badges</p>
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
                    <li class="prev"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                    <li class="active"><a href="#url"><span>1</span></a></li>
                    <li><a href="#url"><span>2</span></a></li>
                    <li><a href="#url"><span>3</span></a></li>
                    <li><a href="#url"><span>4</span></a></li>
                    <li><a href="#url"><span>...</span></a></li>
                    <li class="next"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                </ul>
            </div>

        </div>
    </section>

</x-layouts.welcome-layout>