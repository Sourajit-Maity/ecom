<table border="0" style="width: 100%; border-collapse: collapse; ">
    <tbody>
    <tr>
        <td style="width: 600px; margin: 0 auto; border-collapse: collapse; background-color: #007cb9; ">
            <table border="0" style="width: 600px; margin: 0 auto; border-collapse: collapse;">
                <tbody>
                <tr>
                    <td style="padding: 20px;text-align:center;" width="100%"><img src="{{url('assets/images')}}/logo.jpg" alt="Prameya" title="Prameya" style="display: block; margin: 0 auto;" /></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" style="width: 600px; margin: 50px auto; border-collapse: collapse; background-color: #fff; ">
                <tbody>
                <tr>
                    <td>
                        <h3 style="text-transform: uppercase; margin: 5px 0px 15px 0px; color: #007cb9; font-size: 20pt;">Prameya : Order Details</h3>


                        <h1 class="aligncenter" style="margin: 0px 0px 20px 0px; color: #007cb9;">Hello {{$key['customer_name']}}</h1>

                        <h4 style="text-transform: uppercase; margin: 5px 0px 15px 0px; color: #007cb9; font-size: 10pt;">Name : <span style="font-size: 16px;"> {{$key['customer_name']}}</span></h4>
                        <h4 style="text-transform: uppercase; margin: 5px 0px 15px 0px; color: #007cb9; font-size: 10pt;">Email id : <span style="font-size: 16px;">{{$key['email']}}</span></h4>
                        <h4 style="text-transform: uppercase; margin: 5px 0px 15px 0px; color: #007cb9; font-size: 10pt;">Contact no : <span style="font-size: 16px;"> {{$key['phone_no']}}</span></h4>
                        <h4 style="text-transform: uppercase; margin: 5px 0px 15px 0px; color: #007cb9; font-size: 10pt;">Address : <span style="font-size: 16px;">{{$key['address']}}</span></h4>
                        @if(Session::has('cart'))

                            @php $i=0 @endphp
                            @foreach($key['products'] as $value)

                                <table border="0" style="width: 100%; margin: 20px 0px 20px 0px; border-collapse: collapse; border: 1px solid #ddd4be; ">
                                    <tbody>
                                    <tr>
                                        <th style="text-align: left; padding: 7px; width: 200px; border: 1px solid #ddd4be;">#</th>
                                        <td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{++$i}}</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left; padding: 7px; width: 200px; border: 1px solid #ddd4be;">Name</th>
                                        <td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value['item']['prod_name']}}</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Id</th>
                                        <td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value['item']['id']}}</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Quantity</th>
                                        <td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value['qty']}}</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Unit Price(Rs.)</th>
                                        <td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value['item']['discount_price']}}</td>
                                    </tr>
                                    {{--<tr>--}}
                                    {{--<th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Commodity</th>--}}
                                    {{--<td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value->commodity}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Weight</th>--}}
                                    {{--<td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value->cargo_weight}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;">Remarks</th>--}}
                                    {{--<td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;">{{$value->instructions}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th style="text-align: left; padding: 7px; border: 1px solid #ddd4be;"><h3>Target Rate (ALL IN)</h3></th>--}}
                                    {{--<td style="padding: 7px; width: 400px; border: 1px solid #ddd4be;"><h3>{{$value->target_rate}}</h3></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td width="100%" colspan="2">--}}
                                    {{--<a href="{{url('view_quote')}}/{{$email}}/{{$value->quotesId}}" style="display: inline-block; padding: 15px 25px 15px 25px; background-color: #007cb9; color: #fff; text-decoration: none; text-transform: uppercase; margin :10px 0px 25px 10px;font-size:12px;">Confirm</a>--}}
                                    {{--<a href="{{url('submit_quote')}}/{{$email}}/{{$value->quotesId}}" style="display: inline-block; padding: 15px 25px 15px 25px; background-color: #007cb9; color: #fff; text-decoration: none; text-transform: uppercase;  margin :10px 0px 25px 10px;font-size:12px;">Click to submit Quote</a>--}}
                                    {{--<a href="{{url('decline_quote')}}/{{$email}}/{{$value->quotesId}}" style="display: inline-block; padding: 15px 25px 15px 25px; background-color: #ff3232; color: #fff; text-decoration: none; text-transform: uppercase;  margin :10px 0px 25px 10px;font-size:12px;">Click to decline quote</a>--}}
                                    {{--<p style="font-size: 12pt; line-height: 20px; margin: 0px 0px 10px 10px;">* Bid with carrier assets only, brokered equipment not accepted.</p>--}}

                                    {{--</td>--}}
                                    {{--</tr>--}}

                                    </tbody>
                                </table>

                                <hr>
                                <hr>
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Sub-Total Price(Rs.)::</strong> {{$key['totalPrice']}} </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="margin: 0 auto; border-collapse: collapse; background-color: #007cb9; ">
            <table border="0" style="width: 600px; margin: 0 auto; border-collapse: collapse;color:#fff;">
                <tbody>
                <tr>
                    <td style="padding: 10px 10px 0px 10px; text-align: left;" valign="top">
                        <p style="font-size: 9pt; line-height: 20px; margin: 0px 0px 10px 0px;">Prameyasantiniketan.com.</p>

                        <p style="font-size: 9pt; line-height: 20px; margin: 0px 0px 10px 0px;">Dumdum,Kolkata</p>
                        <p style="font-size: 9pt; line-height: 20px; margin: 0px 0px 10px 0px;">Please Contact To This Customer.</p>

                        {{--<p style="font-size: 9pt; line-height: 20px; margin: 0px 0px 10px 0px;"> <a style="color: #fff; text-decoration: underline;" href="{{url('unsubscribe')}}/{{$email}}">Click here to remove my email</a></p>--}}
                    </td>


                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>