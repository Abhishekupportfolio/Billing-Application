
<?php

$first_name=$_POST['firstName'];
$last_name=$_POST['lastName'];
$Customer_Phone=$_POST['phonenumber'];
$Token=$_POST['tokenid'];


$conn=new mysqli('localhost','root','Pass@123','agencypande');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// SQL QUERY
$query = "SELECT *  FROM customer where Id=$Token;";

// FETCHING DATA FROM DATABASE

$result = $conn->query($query);

if ($result->num_rows > 0) 
{
    // OUTPUT DATA OF EACH ROW
    while($row = $result->fetch_assoc())
    {
           $address=$row['Villege'];
           $iid=$row['Id'];
		   $un=$row['Customer_Id'];
		   $Cement_Name=$row['Cement_Name'];
		   $Cement_Quality=$row['Cement_Quality'];
		   $Cement_Rate=$row['Cement_Rate'];
		   $Cement_Total=$row['Cement_Total'];
		   $Marbal_name=$row['Marbal_name'];
		   $Marbal_quantity=$row['Marbal_quantity'];
		   $Marbal_rate=$row['Marbal_rate'];
		   $Marbal_Total=$row['Marbal_Total'];

		   $Payment=$row['Payment'];
		   $Totalbill=$row['Totalbill'];

		   $add_Date=$row['add_Date'];

    
    }
} 
else {
    echo "0 results";
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Payment</title>
<link rel="icon" type="image/png" href="pay.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
        <link href="https://printjs-4de6.kxcdn.com/print.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/svg-with-js.min.css" integrity="sha512-4oP5WpLD1feGamTDxyKyYjJj9a15AlPfKOt78LpGmZ+XfrUcuC7hjHVTuzhJhO4pPvi3RHL6CI2Tyjdoik3AnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-font-face.min.css" integrity="sha512-sx5f0oBw5bYJXpvIAFXqCP3p5heQFrIDUJEUu2ja7WbmFHBHKY565OjQK2PQM+8PruMwcDR18WEIOse4qEBJ8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-shims.min.css" integrity="sha512-fWfO/7eGDprvp7/UATnfhpPDgF33fetj94tDv9q0z/WN4PDYiTP97+QcV1QWgpbkb+rUp76g6glID5mdf/K+SQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-shims.min.css" integrity="sha512-fWfO/7eGDprvp7/UATnfhpPDgF33fetj94tDv9q0z/WN4PDYiTP97+QcV1QWgpbkb+rUp76g6glID5mdf/K+SQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/brands.min.js" integrity="sha512-IZeK0c+nwCpZdoWLUoguVYEnBOwOnS3eTyS5Eg57YCk41x2NphG1E/vSa886whDSXG7vGauI8mmbP5PI/VC5LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/brands.min.js" integrity="sha512-IZeK0c+nwCpZdoWLUoguVYEnBOwOnS3eTyS5Eg57YCk41x2NphG1E/vSa886whDSXG7vGauI8mmbP5PI/VC5LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/conflict-detection.min.js" integrity="sha512-tOK04OMrEtOhHdTJSiClQ6wlAHB4BizsjbKbt8KRLLfN1xeCl84CdOW0B++kTNYPp+VDlgJg+jrWX6FuCDx7kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js" integrity="sha512-64O4TSvYybbO2u06YzKDmZfLj/Tcr9+oorWhxzE3yDnmBRf7wvDgQweCzUf5pm2xYTgHMMyk5tW8kWU92JENng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/regular.min.js" integrity="sha512-kSAGSlODsZwG7bMv/Hydyvybjk+WOz4oEqQiWYwpCxQ7/7yXMFynr2QrvNc2myZW/7wyi0IF2TXZZWMeg8AGhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js" integrity="sha512-s6yNeC6faUgveCQocceGXVia7ciAebyTH7hRNazwZa2FHhnxX22qaGeb9d3a8PUKdnoHo3T3bYI/0ZOjmgWkNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/v4-shims.min.js" integrity="sha512-6n3X18GAJomziz6HVPbmyBOEZeoB8+unwEBTRXFs3IZTRYYCkbXNAWNV68uHujamEvDBqaGe2FTW19o81h1/RA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style type="text/css">
    	body{
    background:#eee;
     margin-top:20px;
  }
.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-footer h2 {
			font-size: 15px;
			
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
			
		}
    </style>
	 
</head>
<body>




<div class="row" height="280px" width="216px">
<button type="button"  style="border:0ch" id="bt" onclick="print()"><i class="fa-solid fa-print fa-beat fa-2xl"></i></button>


<div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">

<div class="row">

<div class="receipt-header">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="receipt-left">
<img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 text-right" >
<div class="receipt-right">
<h1><b>Pande  Agency </b></h1>
<p><i class="fa fa-phone"></i> <b>+91 7558258990</b></p>
<p><b>Pandeabhishek9623@gmail.com</b></p>
<p><i class="fa fa-location-arrow"></i><b>Tamsa-431713</b></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="receipt-header receipt-header-mid">
<div class="col-xs-10 col-sm-10 col-md-12 text-left">
<div class="receipt-right">
<h5>Customer Name: <?php echo  $first_name." ".($last_name) ?> </h5>
<p><h7><b>Mobile:</b></h7> <?php echo $Customer_Phone ?></p>
<p><b></b> </p>
<p><b>Address :</b><?php echo $address ?></b></p>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4">
<div class="receipt-left">
<h5><b>Unique Number:</b><?php echo $un?></h5>
<h5><b>Token Number: <?php echo $Token ?></b></h5>
</div>
</div>
</div>
</div>
<div>
<table class="table table-bordered">
<thead>
<tr>
<th>Materials</th>
<th>Quantity</th>
<th>Rate</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<td class="col-md-9"><?php echo $Cement_Name ?></td>
<td class="col-md-3"><?php echo $Cement_Quality ?> </td>
<td class="col-md-3"><i class="fa fa-inr"></i><?php echo $Cement_Rate ?> </td>
<td class="col-md-3"><i class="fa fa-inr"></i><?php echo $Cement_Quality*$Cement_Rate ?></td>

</tr>
<tr>
<td class="col-md-9"><?php echo $Marbal_name?> </td>
<td class="col-md-3"><?php echo $Marbal_quantity?> </td>
<td class="col-md-3"><i class="fa fa-inr"></i><?php echo $Marbal_rate?> </td>
<td class="col-md-3"><i class="fa fa-inr"></i><?php echo $Marbal_quantity*$Marbal_rate ?> </td>

</tr>
<!-- <tr>
<td class="col-md-9"></td>
<td class="col-md-3"><i class="fa fa-inr"></i></td>
<td class="col-md-3"><i class="fa fa-inr"></i></td>
<td class="col-md-3"><i class="fa fa-inr"></i></td>
</tr>
<tr> -->
<!-- <td class="text-right">
<p>
<strong>Total Amount: </strong>
</p>
<p>
<strong>Late Fees: </strong>
</p>
<p>
<strong>Payable Amount: </strong>
</p>
<p>
<strong>Balance Due: </strong>
</p>
</td>
<td>
<p>
<strong><i class="fa fa-inr"></i> 65,500/-</strong>
</p>
<p>
<strong><i class="fa fa-inr"></i> 500/-</strong>
</p>
<p>
<strong><i class="fa fa-inr"></i> 1300/-</strong>
</p>
<p>
<strong><i class="fa fa-inr"></i> 9500/-</strong>
</p>
</td>
</tr> -->

<tr>
<td class="text-right"><h2><strong></strong></h2></td>
<td class="text-left"><h2><strong></i></strong></h2></td>
<td class="text-left text-danger"><h2><strong>Total:</strong></h2></td>
<td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i><?php echo ( $Cement_Rate*$Cement_Quality)+($Marbal_quantity*$Marbal_rate) ?></strong></h2></td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="receipt-header receipt-header-mid receipt-footer">
<div class="col-xs-8 col-sm-8 col-md-8 text-left">
<div class="receipt-right">
	
<h1><b>Payment:</b><?php 
if($Payment==="Paid" || $Payment==="Paid-UPI" ){
	
echo $Payment;

}
else{
	echo $Payment;
}
?>
<h2>
<br>
<p><h5><b>Date :</b>
<?php

$mydate=getdate(date("U"));
echo "<b>$mydate[month] $mydate[mday], $mydate[year]</b>";
?>
</h5>
</p>

<h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4">
<div class="receipt-left">
<h1><b>Stamp & Sign</b></h1>
<br>
<h1>Pande Agency</h1>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
                $(document).ready(function(){
                    $("#btnPrint").on("click",function(){
                        printJS({
                            printable: 'print-area',
                            type: 'html'});
                    })
                })
        
</script>
</body>
</html>