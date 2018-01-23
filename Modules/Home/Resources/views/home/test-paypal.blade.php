@extends('home::layouts.master')
@section('title','Register')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Register</h1>
                    <form id="paypalform" data-prodid="" method="post" action="https://www.sandbox.paypal.com/webscr"
                          name="_xclick">
                        <input type="hidden" value="_xclick" name="cmd">
                        <input type="hidden" value="raushank3-business@globussoft.in" name="business">
                        <input type="hidden" value="USD" name="currency_code">
                        <input id="paypalamt" type="hidden" value="1" name="amount">
                        <input type="hidden" value="7" name="custom">
                        <input type='hidden' name='rm' value='2'>
                        <!-- <input type="hidden" value="http://dev.vcunnect.com/ipn-listener" name="notify_url"> -->
                        <input type="hidden" value="http://localhost.myedulogy.com/success" name="return">
                        <input class="buynowbtn" type="image" border="0"
                               style="position: absolute; left: 41%; bottom: -33%; "
                               src="http://www.paypal.com/en_US/i/btn/btn_paynow_LG.gif">
                        <div style="margin-top: 30px;">
                            <span style="color: rgb(68, 68, 68); margin-bottom: 1px; position: absolute; left: 22%; padding: 10px; bottom: 7%;"><b>Paypal transaction fee not included into transaction</b></span>
                        </div>
                    </form>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

@stop
