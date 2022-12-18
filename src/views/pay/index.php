
  <!-- PAYPAL -->
  <!-- Replace "test" with your own sandbox Business account app client ID -->
  <script src="https://www.paypal.com/sdk/js?client-id=Ad3W5NwEIU0dsnq-0ceovxjEu4rMfLjiXByoqs08JqjYGS1rUy7oqwVprP4jWDr91NIe1fC9_kk2Ypbq&currency=EUR"></script>
  <!-- Set up a container element for the button -->
  <div class='m-3' align="center" id="paypal-button-container"></div>
  <script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create(<?= $order ?>);
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          // const transaction = orderData.purchase_units[0].payments.captures[0];
          // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>'
          // Or go to another URL:
            actions.redirect('http://localhost/best-wines/pay/paypal?orderId='+ orderData.id);

        });
      }
    }).render('#paypal-button-container');    
  </script>

  <!-- STRIPE -->
<div align='center'> <a class='btn color1 m-3' href="/best-wines/pay/stripe">Payer avec Stripe</a></div>
  
