<x-layouts.welcome-layout>
<section class="order-history cmn-gap2">
        <div class="container"> 
            @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
            @endif
            <div class="order-table saved-address">
                <div class="address-wrap">
                    <h2>Address list</h2>
                    <a class="cmn-btn" href="{{route('welcome.add-address')}}">+ Add address</a>
                </div>
                

                <table class="table">
                 <thead>
                    <tr>
                        <th>Nick name</th>
                        <th>Street address</th>
                        <th>city</th>
                        <th>Postal code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody> 
                    @if (count($shippingaddresses) > 0)
                            @foreach ($shippingaddresses as $shippingaddress)
                    <tr>
        
                        <td>{{ $shippingaddress->nick_name }}</td>
                        <td>{{ $shippingaddress->street_address }}</td>
                        <td>{{ $shippingaddress->city }}</td>
                        <td>{{ $shippingaddress->postal_code }}</td>
                        
                        <td>
                            <div class="table-btn">
                                <a class="cmn-btn" href="{{ route('welcome.edit-address',[$shippingaddress->id]) }}">ORDER/EDIT</a>
                                <a class="cmn-btn" href="{{route('welcome.delete-address',['id'=>$shippingaddress->id])}}">Delete</a>
                            </div>
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
                        <!-- <li>{!! $shippingaddresses->appends(['sort' => 'id'])->links() !!}</li>                    -->
                         <li>{{ $shippingaddresses->links('vendor.pagination.custom') }}</li>
                    </ul>
            </div>

        </div>
    </section>

</x-layouts.welcome-layout>