

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body style="padding: 2.5rem;">
 <!-- #region -->
 
                  
                  
<?php


 $Token=$_POST['inputText'];


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
        $first_name=$row['First_Name'];
        $last_name=$row['Last_Name'];
        $Customer_Phone=$row['Phone'];
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
    

$add_Date=$row['Date'];

    
    }
} 
else {
    echo "0 results";
}

$conn->close();
?>

  <div class="row" style="margin:0;padding:0;">
    <div class="col-md">
      <table class="table">
        <thead colspan="2" style="font-size:medium"><strong style><h1><b>Billing Summary</b></h1></strong></thead>
        <!-- #region -->
       
        <tbody>
        <tr>
            <td>Customer Name</td>
            <td><?php echo $first_name." ".($last_name) ?></td>
          </tr> 
          <tr>
            <td>Billing Account Status</td>
            <td><?php echo $Payment ?></td>
          </tr> 
          <tr>
            <td>Billing Account Status Detail</td>
            <td><?php echo $first_name." ".$last_name ?></td>
          </tr>
          <tr>
            <td>Total Bill (Chargent)</td>
            <td><?php echo "₹"." ".$Totalbill ?></td>
          </tr>
          <tr>
            <td>Amount Paid To Date</td>
            <td><?php echo "₹"." ".$Totalbill ?></td>
          </tr>
          <tr>
            <td>Percentage Paid</td>
            <td>100%</td>
          </tr>
          
            <td>Payment  Amount</td>
            <td><?php echo "₹"." ".$Totalbill ?></td>
          </tr>
          <tr>
            <td>Payment Due Date</td>
            <td><?php echo ""." ".$add_Date ?></td>
          </tr>
          <tr>
            <td>Past Due Amount</td>
            <td>$0.00</td>
          </tr>
        
          <tr>
            <td>Cement Name</td>
            <td><?php echo $Cement_Name ?></td>
          </tr>
          <tr>
            <td>Cement Quantity</td>
            <td><?php echo $Cement_Quality ?></td>
          </tr>
          <tr>
            <td>Cement Rate</td>
            <td><?php echo $Cement_Rate ?></td>
          </tr>
          <tr>
            <td>Cement Total</td>
            <td><?php echo "₹"." ".$Cement_Total ?></td>
          </tr>
          <tr>
            <td>Marbal Name</td>
            <td><?php echo $Marbal_name ?></td>
          </tr>
          <tr>
            <td>Marbal Quantity</td>
            <td><?php echo $Marbal_quantity ?></td>
          </tr>
          <tr>
            <td>Marbal Rate</td>
            <td><?php echo $Marbal_rate ?></td>
          </tr>
          <tr>
            <td>Marbal Total</td>
            <td><?php echo "₹"." ".$Marbal_Total ?></td>
          </tr>

        </tbody>
       
      </table>
    </div>
    <div class="col-md">
    <button class="btn btn-primary mt-3" onclick="goBack()">Go Back</button>
    </div>
  </div>
  <script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>