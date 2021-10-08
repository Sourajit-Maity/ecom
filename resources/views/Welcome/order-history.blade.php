<x-layouts.welcome-layout>
    <section class="order-history cmn-gap2">
        <div class="container">


            <div class="order-table">
                <h2>Order History</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Names</th>                                                              
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($orders) > 0)
                        @foreach ($orders as $order)
                        <tr class="custom-tr-color">
                            <td>
                                <div class="image-wraper shadow">
                                    <div class="order-image">
                                        <img src="{{ $order->image }}" alt="">
                                        <!-- <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a> -->
                                    </div>
                                </div>
                            </td>
                            <td>{{ $order->title }}</td>  
                            <td>##{{ $order->id }}</td> 
                            <td>{!! \Carbon\Carbon::parse($order->created_at)->format('d M Y') !!}</td>                                                       
                            <td colspan="4"></td>                                                      
                                                                                                             
                            <!-- <td>{{ $order->quantity }}</td>
                            <td>$ {{ $order->payment_price }}</td>                               
                            <td>{{ $order->status }}</td>
                             -->
                            
                        </tr>
                        @endforeach
                        @foreach ($orders as $order)
                        <tr>
                            <td>
                                <h4>Name Badge</h4>
                            </td>
                            <td></td>  
                            <td></td>   
                            <td></td>                                                    
                            <td>{{ $order->names }}</td>                                                      
                                                                                                            
                           <td>{{ $order->quantity }}</td>
                            <td>${{ $order->payment_price }}</td>                               
                            <td>{{ $order->status }}</td>
                             
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">No entries in table</td>
                        </tr>
                        @endif
                        @if (count($orderdetails) > 0)
                        @foreach ($orderdetails as $orderdetail)
                        <tr>
                            <td><h4>NameBadge</h4></td>                           
                            <td>--</td>   
                            <td>--</td>
                            <td>--</td>
                            <td>{{ $orderdetail->name }}</td>                       
                            <td>{{ $orderdetail->quantity }}</td>
                            <td> ${{ $orderdetail->price }} </td>   
                           
                            @if( $orderdetail->status == 1 )
                            <td>Processing</td>
                            @elseif( $orderdetail->status == 2 )
                            <td>Accepted</td>
                            @elseif( $orderdetail->status == 4 )
                            <td>Delivered</td>
                            @else
                            <td>Cancel</td>
                            @endif                        
                            

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
<style>
.custom-tr-color{
    background: aliceblue;
    font-weight: 900;
}
</style>