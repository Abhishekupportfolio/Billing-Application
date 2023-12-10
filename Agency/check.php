
<?php 

include_once('connection.php'); 

?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Check Bill</title> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head> 
	<script type="text/javascript">
        function msg(){
			document.getElementById("form").submit();
            return null;
		}

		function msg1()
		{
			document.getElementById("form").onkeydown = function(e){
                       if(e.keyCode == 13){
						document.getElementById("form").submit();
            return null;
            }
           };
		}

	</script>
    <style>
        .content-table{
            border-collapse:collapse;
            margin-top: 70px;
            font-size: 1.5em;
            min-width:1200px;
			
        }

        .content-table th  {
            background-color:#009879;
			color: #ffff ;
			border-left:5px solid #009879;

        }
		
		
       .content-table th,
       .content-table td {
        padding:16px 20px;
		text-align: center;
		text-shadow: #009879;
       }

	    .content-table tbody tr {
         border-bottom: 3px blueviolet #dddddd;
		 border-left:5px solid #009879;
		 padding-left: 100px;
        } 

       .content-table tbody tr:nth-of-type(even) {
         background-color: #f3f3f3;
		 border-left:5px solid #009879;
       } 

        .content-table tbody tr:last-of-type {
         border-bottom: 5px solid #009879;
		 border-left:5px solid #009879;
		
      }
	   .content-table tbody td:last-of-type {
         border-bottom: 5px solid #009879;
		 border-left:5px solid #009879;
		

      }

       
	   .form-group{
		padding-left:200px;
		padding-right: 200px;
	   }
	  
       .form-button
	   {
		position: relative;
		padding-left: 500px;
		
	   }
	   h1{
		padding-left: 0%;
	   }
	  

    </style>
	<body> 

	
	<table class="content-table" align="center" border="2px" style="width:600px; line-height:40px;"> 
	<tr> 
	

		
		
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>College</th>
			<th>Email</th>
            <th>Phone</th>
            <th>Country</th>
			<th>State</th>
            <th>City</th>
            <th>Gender</th>
			<th>DOB</th>
            <th>Degree</th>
            <th>Branch</th>
			<th>10th_Mark</th>
            <th>10th_PY</th>
            <th>12th_Mark</th>
			<th>12th_PY</th>
            <th>Diploma_Mark</th>
            <th>Diploma_PY</th>
			<th>Diploma_Stream</th>
            <th>Academics_mark</th>
            <th>Live Backlogs</th>
			<th>Closed Backlogs</th>
            <th>Sem1</th>
            <th>Sem2</th>
			<th>Sem3</th>
            <th>Sem4</th>
            <th>Sem5</th>
			<th>Sem6</th>
            <th>Sem7</th>
            <th>Sem8</th> 
          </tr>
        
        <tbody>
			<form  action="index.php" id="form" method="POST">
			<div class="form-group">
               <label for="exampleInputEmail1"></label>
               <input type="text" class="form-control" id="email" name="prn" onmouseout="msg()" onkeydown="msg1()" on  placeholder="Enter id">
               
              <!-- </div>
			  <div class="form-button">
			  <button type="submit" class="btn btn-primary">Submit</button>
			  </div> -->
			</form>
        
		

		
        <?php
		 $PRN=$_POST['prn'];
		 
		  $query="select * from company where Roll_No='$PRN'"; 

		  $result=mysqli_query($conn,$query);
		 ?>

		



		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tbody>
		<tr>

        <td><?php echo $rows['Roll_No']; ?></td> 
		<td><?php echo $rows['Full_Name']; ?></td> 
		<td><?php echo $rows['College']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Phone']; ?></td> 
		<td><?php echo $rows['Country']; ?></td> 
		<td><?php echo $rows['State']; ?></td> 
		<td><?php echo $rows['City']; ?></td> 
		<td><?php echo $rows['Gender']; ?></td> 
		<td><?php echo $rows['DOB']; ?></td> 
		<td><?php echo $rows['Degree']; ?></td> 
		<td><?php echo $rows['Branch']; ?></td> 
		<td><?php echo $rows['10th_Marks']; ?></td> 
		<td><?php echo $rows['10th_PY']; ?></td> 
		<td><?php echo $rows['12th_MARK']; ?></td> 
		<td><?php echo $rows['12th_PY']; ?></td> 
		<td><?php echo $rows['Diploma_Marks']; ?></td> 
		<td><?php echo $rows['Diploma_Passing Year']; ?></td> 
		<td><?php echo $rows['Diploma_Stream']; ?></td> 
		<td><?php echo $rows['Academics_Marks']; ?></td> 
		<td><?php echo $rows['Live_Backlogs']; ?></td> 
		<td><?php echo $rows['Closed_Backlogs']; ?></td> 
		<td><?php echo $rows['Semester1_Marks']; ?></td> 
		<td><?php echo $rows['Semester2_Marks']; ?></td> 
		<td><?php echo $rows['Semester3_Marks']; ?></td> 
        <td><?php echo $rows['Semester4_Marks']; ?></td> 
		<td><?php echo $rows['Semester5_Marks']; ?></td> 
		<td><?php echo $rows['Semester6_Marks']; ?></td> 
		<td><?php echo $rows['Semester7_Marks']; ?></td> 
		<td><?php echo $rows['Semester8_Marks']; ?></td> 
		
		

		
	
		</tr> 
		</tbody>
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>