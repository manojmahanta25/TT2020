<?php 
$rkey = $request-> session()-> get('rkey');
if ($_POST) {
            $razorpay_payment_id = $_POST['razorpay_payment_id'];
            
            echo "Razorpay success ID: ". $razorpay_payment_id;
        }
        echo " test id -".$razorpay_payment_id;
        echo rkey;
        ?>