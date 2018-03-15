<html>
<head>
     <link rel="stylesheet" type="text/css" href="styler.css" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
   <?php
   require 'connect.inc.php';
   include 'topbar.php';
   
   //insertion-------------------------------------------------------------------------------------------------------------------------------------------------
   
   if(isset($_GET['admissionno1']) && isset($_GET['studentregno1']) && isset($_GET['name']) && isset($_GET['advisor1']) && isset($_GET['year']) && isset($_GET['dept']))
     {
	 
	   $a    =  $_GET['admissionno1'];
       $reg  =  $_GET['studentregno1'];
	   $name =  $_GET['name'];
	   $adv  =  $_GET['advisor1'];
	   $year =  $_GET['year'];
	   $dept =  $_GET['dept'];
  

	   
	   $qry0="INSERT INTO stud (admission,rollno,name,advisor,year,dept) VALUES ('$a','$reg','$name','$adv','$year','$dept')";
	   
	   
	   echo "<br/><br/><br/><br/><br/><br/>";
	   
	   if( empty($_GET['admissionno1']) || empty($_GET['studentregno1']) || empty($_GET['name']) || empty($_GET['advisor1']) || empty($_GET['year']) || empty($_GET['dept']))
		{
             print "<script type='text/javascript'>
	         window.alert('please enter all fields');
			 window.location='adminpage.php';
			 </script>";

        }
		
	   elseif(mysqli_query($conn,$qry0))
	   { 
	       echo"<center>";
		   echo "<b><span style='font-size:20px'>New record created successfully.</span></b><br/>";
		   echo "<em><a href='adminpage.php'>enter marks using update section of this page(click to go to admin page)</a></em>";
		   echo"</center>";
       } 
	   
	   
	   
	   else
	   {   echo "<center>";
           echo "<b>This data already exists.<br/>Please check the registration number.</b>";
		   echo "</center>";

	   }
	   }
	    
		   
  
	   


//update operation-----------------------------------------------------------------------------------------------------------------------------------------

     if(isset($_GET['studentregno2']) && isset($_GET['mark1']) && isset($_GET['mark2']) && isset($_GET['mark3']) &&isset($_GET['mark4']) && isset($_GET['mark5']) && isset($_GET['mark6']))
	 {
        $studentreg=$_GET['studentregno2'];
	   $mark1 = $_GET['mark1'];
	   $mark2 = $_GET['mark2'];
	   $mark3 = $_GET['mark3'];
	   $mark4 = $_GET['mark4'];
	   $mark5 = $_GET['mark5'];
	   $mark6 = $_GET['mark6'];
	   $total = $mark1+$mark2+$mark3+$mark4+$mark5+$mark6;
	   $percentage = ($total/600)*100; 
	     //--------------------------------------------------------------only positive marks accepted---------------------------------------------------------
	   
	   if($mark1 >0 && $mark1<=100 && $mark2 >0 && $mark2<=100 && $mark3 >0 && $mark3<=100&& $mark4>0 && $mark4<=100 && $mark5>0 && $mark5<=100 && $mark6 >0 &&$mark6<=100)
	  {
	   
	   
	  $qry="UPDATE stud SET mark1='$mark1',mark2='$mark2',mark3='$mark3',mark4='$mark4',mark5='$mark5',mark6='$mark6',total='$total',percentage='$percentage' WHERE rollno='$studentreg'";
	  
	  $result= mysqli_query($conn,$qry);
	  
	  echo "<br/><br/><br/><br/><br/><br/>";
	
	 
	  
	  if(empty($_GET['studentregno2']) && empty($_GET['mark1']) && empty($_GET['mark2']) && empty($_GET['mark3']) && empty($_GET['mark4']) && empty($_GET['mark5']) && empty($_GET['mark6']))
	      {   echo"<script>window.alert('Please enter the required fields');
		      window.location='adminpage.php';
			  </script>";
		  }
	      
 		  elseif(mysqli_affected_rows($conn)==1)
	      {   
	           echo "<center><b><span style='font-size:20px'><a href='adminpage.php'>Updated Successfully. <em>(links to admin page)</em></a></span></b></center>";
	      }
	   
	      else
	     {
		   echo "<center><b><a href='adminpage.php'>This record does not exists.<br/>Please insert the record first(links to admin page)</a></b></center>";
         }
	  
	  }
	  else
	     {
	  
	      echo "<script>window.alert('Update failed.Only valid marks are accepted');
		         window.location='adminpage.php';
                 </script>";
		  }
	}  
	  
	  
	  
	//deletion-------------------------------------------------------------------------------------------------------------------------------------------------
       
     if(isset($_GET['studentregno3']))
      {
         $studreg=$_GET['studentregno3'];
	   $qry1="DELETE FROM stud WHERE rollno='$studreg'";
	   mysqli_query($conn,$qry1);
	   echo "<br/><br/><br/><br/><br/>";
	   if(mysqli_affected_rows($conn)==1)
	   {
		   echo "<center><b><a href='adminpage.php'>Record deleted successfully <em>(links to admin page.)</em></a></b></center>";
	   }
	   
	   elseif(empty($_GET['studentregno3']))
	   {
	     echo"<script>window.alert('please enter the required field');
		      window.location='adminpage.php';
			  </script>";
			  }
	   else
	   {
		   echo "<center><b><a href='adminpage.php'>Record not found.<em>(links to adminpage.)</em></a></b></center>";
      }
	  }
      
	  mysqli_close($conn);
	 ?> 
</body>
</html> 
	  
   