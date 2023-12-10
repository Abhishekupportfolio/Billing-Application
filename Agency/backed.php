<?php

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$Customer_Phone=$_POST['pno'];
$Customer_Villege=$_POST['VillegeName'];
$mydate=getdate(date("U"));




//Cement Name

$CementName=$_POST['cementname'];
$cementquantity=$_POST['cementquality'];
$cementRate=$_POST['cement_Rate'];
$cementtotal=$cementquantity * $cementRate;

//Marbal
$marbalname=$_POST['marbalname'];
$marbalquantity=$_POST['marbalquality'];
$marbalrate=$_POST['baras_Rate'];

$marbaltotal=$marbalquantity * $marbalrate;

//Payment status
$paymentstatus=$_POST['paymentstatus'];
$Gradtotal=$cementtotal+$marbaltotal;

$conn=new mysqli('localhost','root','Pass@123','agencypande');

if($conn->connect_error)
{
    die('Connection failed'.$conn->connect_error);
}else{
   
    $stmt=$conn->prepare("
    insert into customer (First_Name,Last_Name,Villege,Phone,Cement_Name,Cement_Quality,Cement_Rate,Cement_Total,Marbal_name,Marbal_quantity,Marbal_rate,Marbal_Total,Payment,Totalbill) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisiiisiiisi",$first_name,$last_name,$Customer_Villege,$Customer_Phone,$CementName,$cementquantity,$cementRate,$cementtotal,$marbalname,$marbalquantity,$marbalrate,$marbaltotal,$paymentstatus,$Gradtotal);
    $stmt->execute();
    echo '<script> alert("ok") </script>';
    

    $stmt->close();
    $conn->close();
}


$conn=new mysqli('localhost','root','Pass@123','agencypande');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// SQL QUERY
$query = "SELECT Id  FROM customer where Phone=$Customer_Phone;";

// FETCHING DATA FROM DATABASE

$result = $conn->query($query);

if ($result->num_rows > 0) 
{
    // OUTPUT DATA OF EACH ROW
    while($row = $result->fetch_assoc())
    {
        
           $iid=$row['Id'];
           
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
    <style>
        @media (min-width: 1025px) {
     .h-custom {
      height: 100vh !important;
      }
      }

      .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
  
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Customer Information</h3>

            <form action="payment.php" method="POST">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" placeholder="First Name" value=<?php echo $first_name ?> />
                    <label class="form-label" for="firstName"></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" placeholder="Last Name" value=<?php echo $last_name ?> />
                    <label class="form-label" for="lastName"></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="tokenid" name="tokenid" class="form-control form-control-lg" placeholder="Token ID" value=<?php echo $iid ?> />
                    <label class="form-label" for="firstName"></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="number" id="phonenumber" name="phonenumber" maxlength="10" class="form-control form-control-lg" placeholder="Phone Number" value=<?php echo $Customer_Phone ?> />
                 
                  </div>

                </div>
              </div>

            
               

              
              
                <button class="btn btn-primary btn-lg" type="submit">Bill</button>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  

  


<script>
   

</script>
</body>
</html>