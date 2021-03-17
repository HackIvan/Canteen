{{-- <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>

  <body>
    <script src="https://www.paypal.com/sdk/js?client-id=AWTh3dvXJV6PtpSML92BYrXqGi5aThPoCgpQleJNYQy2IdEGb7W3hIhEf2KtKe-QAk75H52so1GHotVB"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>

    <div id="paypal-button-container"></div>

    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '0.01'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
            window.location = 'success';
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
  </body>
</html>


 --}}


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>

<div class="jumbotron text-center">
    <h1></h1>

  </div>

  <div class="container">
    <div class="row">

<div class="col-md-4">
<h4 class="pl-5">Please confirm payment</h4>

        <script src="https://www.paypal.com/sdk/js?client-id=AWTh3dvXJV6PtpSML92BYrXqGi5aThPoCgpQleJNYQy2IdEGb7W3hIhEf2KtKe-QAk75H52so1GHotVB"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
        </script>

        <div id="paypal-button-container"></div>

        <!-- Add the checkout buttons, set up the order and approve the order -->
        <script>
          paypal.Buttons({
            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{
                    amount: {
                    value: '2'
                  }
                }]
              });
            },
            onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
                window.location = 'success';
              });
            }
          }).render('#paypal-button-container'); // Display payment options on your web page
        </script>
</div>
    </div>
    </div>
  </div>
</body>
</html>
