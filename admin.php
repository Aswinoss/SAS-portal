<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styler.css" />
</head>

<body>
<?php include 'topbar.php'; ?>
<br/><br/>
<div class="_admin" >
     <div class="_admintop">
       <h2><em>admin login</em></h2>
     </div>
	 <form name="admin_form" action="adminpage.php" method="GET">
        <input type="text" class="inputtext_reg" id="uname" name="admin_id" placeholder="adminId*" /><br/>
 		<input type="password" id="passwd" class="inputtext_reg" name="adm_password" placeholder="password*" />
    	<button type="button" id="login" class="regButt button" onclick="checkadm()"><em>login</em></button>
      </form>
        <br/><br/><br/><br/>

<div class='cont'>
 <img src='sas.jpg' class='image' />
  <div class="overlay">
    <div class="text">Welcome to SAS</div>
 </div> ;
 </div>
</div>
</body>
</html>