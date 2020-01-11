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
    $displayCurrency= env('RAZORMONEY_SYM');
  @endphp 
        <form action="/success" method="POST" id="form">
          <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo $data['key']?>"
            data-amount="<?php echo $data['amount']?>"
            data-currency="INR"
            data-name="<?php echo $data['name']?>"
            data-image="<?php echo $data['image']?>"
            data-description="<?php echo $data['description']?>"
            data-prefill.name="<?php echo $data['prefill']['name']?>"
            data-prefill.email="<?php echo $data['prefill']['email']?>"
            data-prefill.contact="<?php echo $data['prefill']['contact']?>"
            data-notes.shopping_order_id="<?php echo $rid?>"
            data-order_id="<?php echo $data['order_id']?>"
            <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
            <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
          >
          </script>
          <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
          <input type="hidden" name="rid" value="<?php echo $rid?>">
        </form>

        <script type="text/javascript">
      jQuery(document).ready(function($) {
        $("#form").submit();
      });
    </script>
   
</body>
</html>