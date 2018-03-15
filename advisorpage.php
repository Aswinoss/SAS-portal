
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styler.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <?php
      require 'connect.inc.php';
	  include 'topbar.php';
	  //include 'session.php';
	  echo "<br/><br/><br/><br/><br/>";
	  
	  
	  if(empty($_GET['adv']) && empty($_GET['registerno']))  //validation
      {
       print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='advisor2.php';
			 </script>";

      }
	  
	   elseif(empty($_GET['adv']))
      {
       print "<script type='text/javascript'>
	         window.alert('please enter advisor name');
			 window.location='advisor2.php';
			 </script>";

      }
	  
	  //to view full list-----------------------------------------------------------------------------------------------------------------------------
	  elseif(isset($_GET['adv']) && empty($_GET['registerno']))
   {   
       //if($_GET['adv']==$_SESSION['advisor']){   //remove
       GLOBAL $conn;
	   $a=$_GET['adv'];
	   
	   $qry1="SELECT * FROM stud WHERE advisor='$a'";
	   
	   $result1=mysqli_query($conn,$qry1);
	   print "<table border cellpadding=8>";
       if($result1=mysqli_query($conn,$qry1))
      {
		  while($row=mysqli_fetch_assoc($result1))
{
		  
		   print "<tr>"; 
		   print "<th>Name</th><td>".$row["name"]."</td>";
		   print "<th>Regno</th><td>" .$row["rollno"]."</td>";
		   print "<th>Year</th><td>".$row["year"]."</td>";
		   print "<th>Department</th><td>".$row["dept"]."</td>";
		   print "<th>Mark 1</th><td>".$row["mark1"]."</td>";
		   print "<th>Mark 2</th><td>".$row["mark2"]."</td>";
		   print "<th>Mark 3</th><td>".$row["mark3"]."</td>";
		  print "<th>Mark 4</th><td>".$row["mark4"]."</td>";
		  print "<th>Mark 5</th><td>".$row["mark5"]."</td>";
		  print "<th>Mark 6</th><td>".$row["mark6"]."</td>";
		  print "<th>Total</th><td>".$row["total"]."</td>";
		  print "<th>Percentage</th><td>".$row["percentage"]."</td>";
		  print "</tr>";
		  }
		  
		  print "</table>";
	  }//}   //remove
}

      	   
	 
  
          	  
  
	


	  //to view a single student-------------------------------------------------------------------------------------------
	  if(!empty($_GET['registerno']) && !empty($_GET['adv']))
      {   
	  // if($_GET['adv']==$_SESSION['advisor']){       //remove
	   $a=$_GET['adv'];
       $reg=$_GET['registerno'];
	   
	   $qry="SELECT * FROM stud WHERE advisor='$a' AND rollno='$reg'";
	   
	   $result=mysqli_query($conn,$qry);
	   
      if(mysqli_num_rows($result)==1)
      {
		  $row=mysqli_fetch_assoc($result);
		  print "<center>";
		  print "<table border cellpadding=12>";
		  
		  print "<tr>"; print "<th>Name</th><td><b>".$row["name"]."</b></td>";print "</tr>";
		  print "<tr>"; print "<th>Regno</th><td><b>" .$row["rollno"]."</b></td>";print "</tr>";
		  print "<tr>"; print "<th>Year</th><td>".$row["year"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Department</th><td>".$row["dept"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 1</th><td>".$row["mark1"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 2</th><td>".$row["mark2"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 3</th><td>".$row["mark3"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 4</th><td>".$row["mark4"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 5</th><td>".$row["mark5"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Mark 6</th><td>".$row["mark6"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Total</th><td>".$row["total"]."</td>";print "</tr>";
		  print "<tr>"; print "<th>Percentage</th><td>".$row["percentage"]."</td>";print "</tr>";
		  
		  print "</table>";
          print "</center>";
	  }
	  
	  elseif(mysqli_affected_rows($conn)==0)
	  {  
	        echo "<center>";
	        echo "<h2><b>SORRY!!!</b></h2>";
	        echo "<em><a href='advisor2.php'> we cannot find this student in your class details .Check the entered strings again.(click this to go to previous page )</a></em>"; 
			echo "</center>";
			}
       // }  //remove
	}
	
	
	  
	  
	  
	  
	   
	  
	 echo "<hr/>"; 
	 echo "include 'barbottom.php"; 
	mysqli_close($conn);    
  ?>
</body>
</html>	 
	  