<?php
error_reporting(E_ALL & ~E_NOTICE);

require_once '../app/Mage.php';
umask(0);
Mage::app('default');
$uploadOk = 1;
$target_file = 'order.csv';
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$errorMessage = "";
$businessType =$_POST['businessType'];
$fp = fopen($_FILES["fileToUpload"]["tmp_name"],'r') or die("can't open file"); 

if($businessType == 'amazon') 
{ 
	    $csv_line = fgetcsv($fp,1024);
        while($csv_line = fgetcsv($fp,1024)) 
		{   
			$partnerOrderId = $csv_line[26];
            //$product = new product();
            //$product->sku = $csv_line[23];
            //$product->quantity = $csv_line[26]; 
		    //$priceStr = $csv_line[22]; 
		    //$product->price = substr($priceStr, 1);
            //$product->title = $csv_line[25];
            //$products[0] = $product;

            //$partnerOrderId = $csv_line[0];
            //$wareHouse = $csv_line[3];
            //$giftMessage = $csv_line[28];
					
            //$shipmentAddress = new Address();
            //$shipmentAddress->firstname = $csv_line[10];
            //$shipmentAddress->lastname = "";
            //$shipmentAddress->street = $csv_line[11];
            //$shipmentAddress->city = $csv_line[14];
            //$shipmentAddress->telephone = $csv_line[18];
            //$shipmentAddress->postcode = $csv_line[16];
            //$shipmentAddress->countryId = ($csv_line[17]=="United States")?"US":$csv_line[17];
            //$shipmentAddress->region = $csv_line[15];
			//$orderdatetime = $csv_line[4];
            //$date = substr($orderdatetime,0,10);
            //$time = substr($orderdatetime,10,5);
            //$dateBreak = explode("/", $date);
            //$year = $dateBreak[2];
            //$month = str_pad($dateBreak[0],2,"0",STR_PAD_LEFT);
            //$day = str_pad($dateBreak[1],2,"0",STR_PAD_LEFT);
            //$date = "$year-$month-$day";
            //$orderdatetime = $date. " ".$time;
			
            //$pickup = new Pickup();
            //$pickup->code = $csv_line[9];
            //$pickup->description = $csv_line[8];
			//$pickup->datetime = $orderdatetime; 
            //$customerOrderNumber = $csv_line[31];
            //$order = createOrder($products, $billingAddress, $shipmentAddress, $wareHouse, $giftMessage, $partnerOrderId, $customerOrderNumber, $pickup, $businessType, $shippingAmount);
			
        }
        echo "The Dropship file is successfully processed";
    }
   



?>
