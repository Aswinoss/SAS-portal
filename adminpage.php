<html>
<head>
 <title>Admin Page</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width; initial-scale=1" />
 <link rel="stylesheet" type="text/css" href="styler.css" />
</head>
<body>
<?php 
include 'topbar.php';
?>
<br/><br/><br/><br/><br/>
 <strong><a href='loginpage.php' style='margin-left:1250px ; font-size:20px'>Logout</a></strong><br/><br/><br;
<div class="_maincontent">
 <div class="_adminpage">
   <h2 style="padding-top:3em"> <em>add a student</em></h2>
   <form name="adminp_form" action="admindata.php"  method="GET">
      <input type="text" class="inputtext_reg" name="admissionno1" placeholder="Admission Number*"/>
	  <input type="text" class="inputtext_reg" name="studentregno1" placeholder="Student RegisterNumber*"/><br/>
	  <input type="text" class="inputtext_reg" name="name" placeholder="Name*"/>
	  <input type="text" class="inputtext_reg" name="advisor1" placeholder="Advisor Name*"/><br/>
	  <input type="text" class="inputtext_reg" name="year" placeholder="Year*"/>
	  <input type="text" class="inputtext_reg" name="dept" placeholder="Department*"/>
	  <input type="submit" class="regButt button" value="ADD">
   </form>
	  <h2><em>update details</em></h2><br/>
   <form name="adminu_form" action="admindata.php" method="GET">
	  <input type="text" class="inputtext_reg" name="studentregno2" placeholder="Student RegisterNumber*"/><br/>
	  <input type="text" class="inputtext_reg" name="mark1" placeholder="Mark1"/>
	  <input type="text" class="inputtext_reg" name="mark2" placeholder="Mark2"/><br/>
	  <input type="text" class="inputtext_reg" name="mark3" placeholder="Mark3"/>
	  <input type="text" class="inputtext_reg" name="mark4" placeholder="Mark4"/><br/>
	  <input type="text" class="inputtext_reg" name="mark5" placeholder="Mark5"/>
	  <input type="text" class="inputtext_reg" name="mark6" placeholder="Mark6"/><br/>
	  <input type="submit" class="regButt button" value="Update">
	  </form>
   <form name="admind_form" action="admindata.php" method="GET">
	  <h2><em>delete record</em></h2>
	  <input type="text" class="inputtext_reg" name="studentregno3" placeholder="StudentRegisterNumber*"/>
	  <input type="submit" class="regButt button" value="Delete">
   </form>
 </div>
 <?php 
 echo "<br><br><br><br>
<hr/>";
 include 'barbottom.php';
 ?>
 </div>
</body>
</html>
