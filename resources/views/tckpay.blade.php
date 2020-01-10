<html>
  <head>
    <title> RazorPay Integration in PHP - phpexpertise.com </title>
    <meta name="viewport" content="width=device-width">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
      
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
    
  <form action="{{Route('tt.ticketpaid')}}" id="form" method="POST">
  <!-- Note that the amount is in paise = 50 INR -->  
  {{ csrf_field() }}  
 @php
      $price= $price * 100;
      $description= $numbers_pass." ".$pass_type." Pass for ".$day;
      $ordid="TT_".$rid;
     
@endphp
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="rzp_test_bRKLvySpamOQsX"
        data-amount="<?php echo $price; ?>"
        data-currency="INR"
        data-payment_capture="1"
        data-order-id="<?php echo $order; ?>"
        data-buttontext="Pay with Razorpay"
        data-name="Talent Tantra 2020"
        data-description="<?php echo $description; ?>"
        data-image="http://talenttantra.com/images/tt_250.png"
        data-prefill.name="Enter Your Card Name"
        data-prefill.email="Enter Your Email"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="<?php echo $rid; ?>" name="rid">
    </form>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $("#form").submit();
      });
    </script>
</body>
</html>