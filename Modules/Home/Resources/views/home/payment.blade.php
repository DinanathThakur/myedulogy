@extends('home::layouts.master')
@section('title','Payment')
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><i class="fa fa-file-text-o"></i> Your order summary</div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Order Details</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orderData as  $data)
                                        <tr>
                                            <td>{{ $data['quantity'] }}</td>
                                            <td>{{ $data['name'] }}</td>
                                            <td>{{ $data['price']}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Total</th>
                                        <th>{{$finalPrice}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <form action="https://www.sandbox.paypal.com/webscr" method="post">
                                <input type="hidden" value="_xclick" name="cmd">
                                <input type="hidden" value="dina@merchant.com" name="business">
                                <input type="hidden" value="USD" name="currency_code">
                                <input id="paypalamt" type="hidden" value="{{$finalPrice}}" name="amount">
                                <input type="hidden" value="7" name="custom">
                                <input type='hidden' name='rm' value='2'>
                                <input type="hidden" value="{{url("/success")}}" name="return">
                                <input type="submit" value="Pay with PayPal!">
                            </form>
                        </div>
                    </div>

                    {{--<div class="panel panel-success">--}}
                    {{--<div class="panel-heading"><i class="fa fa-pencil-square-o"></i> Enter Details</div>--}}
                    {{--<div class="panel-body">--}}

                    {{--<div class="table-responsive">--}}
                    {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>Quantity</th>--}}
                    {{--<th>Order Details</th>--}}
                    {{--<th>Amount</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                    {{--<td>1</td>--}}
                    {{--<td>Anna</td>--}}
                    {{--<td>Pitt</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                    {{--</table>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </section>

@stop
