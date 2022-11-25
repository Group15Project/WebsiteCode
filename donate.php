<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='sb-ky7ng20887393@business.example.com'; // Business email ID
?>
<h4>Donation : $1</h4>
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Donation Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="1">
    <input type="hidden" name="cpp_header_image" value="test.jpg"> // Add Header Image
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="ZAR">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="cancel.php"> // Add Cancel Page url
    <input type="hidden" name="return" value="success.php"> // Add Success Page url
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>