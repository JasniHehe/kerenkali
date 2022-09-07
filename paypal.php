<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<script src="https://www.paypal.com/sdk/js?client-id=AbBJ7pxbcJue3hfJwZnBDd5k83eTsFbx7ldL7_yEdg1C-fEWs31asnvWvZOvKndR6wBk9EPViDJzhpom" data-csp-nonce="xyz-123">
	</script>
<body>
	 <div class="row product">
      <div class="col-md-4">
          <h3>Toy Story Jessie T-Shirt</h3>
          <p>
          <form class="ajaxasync" method="POST" action="charityprocess.php">
			 <input type="text" class="form__input" id="name" name="name" autofocus placeholder="Name"></input>
			<input type="text" class="form__input" id="email" name="email" autofocus placeholder="Email"></input>

              <button id="t2" type="submit" name="Submit" class="checkout" class="paypal-button-hidden">
                  <img src="https://www.paypalobjects.com/fr_FR/i/btn/btn_xpressCheckout.gif">
              </button>
          </form>
          </p>
      </div>
  </div>
	
	<script>
	window.paypalCheckoutReady = function() {
    paypal.checkout.setup("6XF3MPZBZV6HU", {
        environment: 'sandbox',
        click: function(event) {
            event.preventDefault();

            paypal.checkout.initXO();
            $.support.cors = true;
            $.ajax({
                url: "https://www.paypal.com/sdk/js?client-id=AbBJ7pxbcJue3hfJwZnBDd5k83eTsFbx7ldL7_yEdg1C-fEWs31asnvWvZOvKndR6wBk9EPViDJzhpom",
                type: "GET",
                data: '&ajax=1&onlytoken=1',   
                async: true,
                crossDomain: true,

                //Load the minibrowser with the redirection url in the success handler
                success: function (token) {
                    var url = paypal.checkout.urlPrefix +token;
                    //Loading Mini browser with redirect url, true for async AJAX calls
                    paypal.checkout.startFlow("https://www.paypal.com/sdk/js?client-id=AbBJ7pxbcJue3hfJwZnBDd5k83eTsFbx7ldL7_yEdg1C-fEWs31asnvWvZOvKndR6wBk9EPViDJzhpom");
                },
                error: function (responseData, textStatus, errorThrown) {
                    alert("Error in ajax post"+responseData.statusText);
                    //Gracefully Close the minibrowser in case of AJAX errors
                    paypal.checkout.closeFlow();
                }
            });
        },
        button: ['t1', 't2']
    });
}
	</script>
</body>
</html>