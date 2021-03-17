@include('front/layouts.header')
<div class="registerPayment">
    <div class="paymentSuccess">
        <img src="<?php echo url('/')?>/assets/images/paySuccess.png" class="payment-Seccessful" alt="success">
    </div>
    <h3>Payment Successful</h3>
    <p>Your payment was successfull Your payment tocken number is <span>{{$data['id']}}</span></p>
    <a href="bath" class="btn rect-button">Go Back</a>
</div>
@include('front/layouts.footer')