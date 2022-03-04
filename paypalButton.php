<?php   
       
?>
<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>



      <script>
          // rendering the paypal button to call the PayPal API
        paypal.Button.render({
            <?php if(PRO_PayPal) { ?>
            env: 'production', 
            <?php } else {?> 
            env: 'sandbox',
            <?php } ?>
        
        // setting sandbox configurations
            client: {
                sandbox:    '<?php echo PayPal_CLIENT_ID; ?>',
                production: '<?php echo PayPal_CLIENT_ID; ?>'
            },
           
            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {
                
                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '<?php echo $getproperty->Price ?>', currency: '<?php echo $getproperty->Currency ?>' }
                            }
                        ]
                    }
                });
            },
        

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Make a call to the REST api to execute the payment
                
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
        
                    window.location = "<?php echo BASE_URL ?>process.php?paymentRef="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&propid=<?php echo $propid ?>";

                });
            }


        }, '#paypal-button-container');

    </script>