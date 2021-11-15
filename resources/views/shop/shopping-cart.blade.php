
@extends('templates.frontend')

@section('content')
    <div style="margin-top:182px"></div>


    <div class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            <br/><br/>

        @if(Session::has('cart'))
            <div class="panel-body">
                <div class="table-responsive">

                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Id</th>
                            <th>Product Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            <th>Remove Items
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=0 @endphp
                        @foreach($products as $value)


                            <tr>
                                <td>{{++$i}}</td>
                                <td><img src="{{url('assets/images')}}/{{$value['item']['image']}}" width="100"></td>
                                <td> <strong>{{$value['item']['prod_name']}}</strong></td>
                                <td><strong>{{$value['item']['id']}}</strong></td>
                                <td><a href="{{route('reduceByOneCart',['id' => $value['item']['id']])}}" data-toggle="tooltip" title="Reduce By One">
                                            <i class="fa fa-minus-square" aria-hidden="true"></i></a>
                                    <span class="badge">{{$value['qty']}}
                                      <a href="{{route('addByOneCart',['id' => $value['item']['id']])}}" data-toggle="tooltip" title="Add By One"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></span></td>
                                <td><span class="label label-success">{{$value['item']['discount_price']}}</span></td>
                                <td><span class="label label-success">{{$value['discount_price']}}</span></td>
                                <td>
                                <a href="{{route('reduceCart',['id' => $value['item']['id']])}}" data-toggle="tooltip" title="Reduce All"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>

                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 ">
                    <strong>Total Price : {{$totalPrice}} Rs only </strong>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    {{--<button type="button" class="btn btn-success">Checkout</button>--}}
                    <button type="button" class="btn btn-xs btn-success pull-right btn-marg-left" data-toggle="modal" data-target="#myModal" >Check Out</button>
                    <a class="btn btn-primary pull-right" style="margin-left:0px;" href="{{url('/')}}">Continue Shopping</a>

                </div>
            </div>

        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No items in the cart</h2>
                </div>
            </div>
        @endif
    </div>
    </div>
    </section>
    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="text-indent: 0;">&times;</button>
                        <h4 class="modal-title">Selected Products</h4>

                        @if(Session::has('cart'))
                            <div class="panel-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Product Quantity</th>
                                            <th>Unit Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $value)
                                            <tr>
                                                <td><img src="{{url('assets/images')}}/{{$value['item']['image']}}" width="100"></td>
                                                <td> <strong>{{$value['item']['prod_name']}}</strong></td>
                                                <td><span class="badge">{{$value['qty']}}</span></td>
                                                <td><span class="label label-success">{{$value['item']['discount_price']}}</span></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <strong>Total Price : {{$totalPrice}} Rs only </strong>
                                </div>
                            </div>
                        @endif


                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title">Your Contact Details</h4>

                        <form action="{{url('cartsubmit')}}" method="post"  id="cxform">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="customer_name" required  placeholder="Name"  />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="email" required placeholder="Email"  />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control input-sm input-inverse" name="phone_no" required placeholder="Phone Number" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-sm input-inverse" name="address"  rows="5" required placeholder="Address"  ></textarea>
                            </div><br class="clear" />
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-warning" data-dismiss="modal">cancel</button>
                        <button class="btn btn-xs btn-info" form="cxform" id="save">Order Now</button>
                        <div id="loading" style="position: absolute;left: 50%;top: 50%;"></div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

        $(document).ready(function() {

                $('#save').click(function () {
                    // add loading image to div

                    // run ajax request
                    
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "{{url('cartsubmit')}}",
                        success: function (d) {
                            setTimeout(function () {
                             
                            }, 2000);
                        }
                    });
                });
            }
        );

    </script>

    <script>

        $(document).ready(function() {

            $('#cxform').on('submit', function (e) {



                    e.preventDefault();
                        $.ajax({ type: 'post',url: "{{url('cartsubmit')}}",data: $('#cxform').serialize(), success: function (data)

                        {
                            if(data==1){

                                $('#save').prop('disabled', true);
                            }
                            console.log('form was submitted');
                            location.reload();
                        }
                        });

                    }
                );
            }
        );

    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


@stop
