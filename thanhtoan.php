<?php
  require_once('vendor/autoload.php'); // Nạp thư viện Stripe
  \Stripe\Stripe::setApiKey('YOUR_SECRET_KEY_HERE'); // Cung cấp Stripe Secret Key

  // Thông tin khách hàng
  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@email.com',
      'source'  => $_POST['stripeToken']
  ));

  // Thông tin thanh toán
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1000,
      'currency' => 'usd'
  ));

  // Kiểm tra kết quả thanh toán
  if($charge->status == 'succeeded') {
      echo 'Thanh toán thành công';
  } else {
      echo 'Thanh toán thất bại';
  }
?>
