<html>
<head>
    <link rel="stylesheet" type="text/css"  href="styler.css" />
	
</head>
<body>
  <?php include 'topbar.php'; 
        //include 'session.php';
   

  
  ?>
    
  
	 <br/><br/><br/><br/><br/>
	 <strong><a href="loginpage.php" style="margin-left:1250px ; font-size:20px">logout</a></strong><br/><br/><br/>
	 
	<form name="advisor_form" action="advisorpage.php" method="GET">
        <input type="text" class="inputtext_reg" name="adv" placeholder="class advisor name*" /><br/>
 		<input type="text"  class="inputtext_reg" name="registerno" placeholder="registration no*" /><em>(leave empty to view entire list)</em><br/>
		<input type="Submit" class="regButt button"  value="view list" />
		
		</form>		
		
    	
 <br/><br/><br/><br/><br/>	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 <hr/>
 <?php include "barbottom.php"; ?>

</body>
</html>
	