<?php
namespace Sample;

require_DIR_. '/vendor/autoload.php';
//1. Import the PayPal SDK client that was created in "Set up Server-Side SDK.

use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
require 'paypal-client.php';
$orderID = $_GET['orderID'];

class GetOrder
{
   // 2. Set up your server toeceive a call from the client
   /**"You can use this function to retrieve an order by passing order ID as an argument.
   */
 public static function getOrder($orderId)
 {
   // 3. Call PayPal to get the transaction details
    $client = PayPaLClient::client ();
    $response = $client->execute(new OrdersGetRequest($orderId));
    //transaction details
	
	$orderID = $response->$result->id;
	$email = $reponse->result->payer->email_address;
	$name = $response->result->purchase_units[0]->shipping->name->full_name;
    $address1 = $response->result->purchase_units[0]->address->address_line_1;
    $address2 = $response->result->purchase_units[0]->address->admin_area_2;
    $address3 = $response->result->purchase_units[0]->address->admin_area_1;
    $address4 = $response->result->purchase_units[0]->address->postal_code;
    $address5 = $response->result->purchase_units[0]->address->country_code;
	$FullAdress = $address1.", ".$address2.", ".$address3.", ".$address4.", ".$address5;
	 
	//insert details to our databese
	include('dbconnect.php');
	 
	 $stmt = $con->prepare("INSERT INTO customer_details (name, email, orderID, address) VALUES (?,?,?,?)");
	 $stmt->bind_param("ssss", $name, $email, $orderID, $FullAddress);
	 $stmt->execute();
	 if (!$stmt) {
   		# code...
 		echo 'There was a problem on your code' .mysqli_error($con);
    }
   else{
     header("Location: ../success.php");
   }
	 $stmt->close();
	 $stmt->close();
 }
}

if (!count (debug_backtrace()))
{
GetOrder::getOrder($orderID, true);
}
?>
