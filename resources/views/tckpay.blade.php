@include('elements.header')
<meta name="csrf-token" content="{{ csrf_token() }}">

        <form  method="post" id="form" name="form" >
               {{ csrf_field() }}
                 {!! $body !!}               
            </form>
            <script>document.getElementById("form").submit();</script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>

         var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         }); 
         $('form').on('submit', function(e){

          var rid = $(this).id("rid");
          var pass_type = $(this).id("pass_type");
          var numbers_pass = $(this).id("numbers_pass");
           var select_day =  $(this).id("select_day");
           var mobile =  $(this).id("mobile");
           var name =  $(this).id("name");
           var email =  $(this).id("email");
           var totalAmount = $(this).id("price");

           var options = {
           "key": "rzp_test_bRKLvySpamOQsX",
           "amount": totalAmount, // 2000 paise = INR 20
           "name": name,
           "description": "Payment of ".,
           "image": "http://talenttantra.com/images/tt_250.png",
           "handler": function (response){
                 $.ajax({
                   url: SITEURL + 'paysuccess',
                   type: 'post',
                   dataType: 'json',
                   data: {
                    razorpay_payment_id: response.rid , 
                     totalAmount : totalAmount ,pass_type : pass_type,numbers_pass:numbers_pass
                   }, 
                   success: function (msg) {
          
                       window.location.href = SITEURL + 'razor-thank-you';
                   }
               });
             
           },
          "prefill": {
               "contact": mobile,
               "email":   email,
               "name":   name,
               
           },
           "theme": {
               "color": "#528FF0"
           }
         };
         var rzp1 = new Razorpay(options);
         rzp1.open();
         e.preventDefault();
         });
         /*document.getElementsClass('buy_plan1').onclick = function(e){
           rzp1.open();
           e.preventDefault();
         }*/
      </script>