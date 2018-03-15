<html>
<head>
   <link rel="stylesheet" type="text/css" href="styles/styler.css" />
 </head>
<body>
   <?php
      require 'connect.inc.php';
	  include 'topbar.php';
	  echo "<br><br><br><br><br>";
	  if(isset($_GET['adv']) )
   {   
       GLOBAL $conn;
	   $a=$_GET['adv'];
	   
	   $qry="SELECT * FROM stud WHERE advisor='$a'";
	   
	   $result=mysqli_query($conn,$qry);
	   print "<table border cellpadding=12>";
      if(mysqli_num_rows($result)>=1)
      {
		  while($row=mysqli_fetch_assoc($result)){
		  
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
		  print "<tr>"; print "<th>Percentage</th><td>".$row["percentage"]."</td>";print "</tr>";}
		  
		  print "</table>";
	  }

      elseif(empty($_GET['adv']))
      {
       print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='advisor2.php';
			 </script>";

      }	   
  
      else{  
	        echo "<center>";
	        echo "<h2><b>SORRY!!!</b></h2>";
	        echo "<em><a href='advisor2.php'> the entered advisor is not present in database .Check the entered strings again.(click this to go again to loginpage)</a></em>"; 
			echo "</center>";
			}
    	  
  }
	


  ?>
</body>
</html>
	  
	  