<html>
 <head>
   <link rel="stylesheet" type="text/css" href="styler.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
<?php  
include 'topbar.php';
include 'function.php';
require 'connect.inc.php';
?>

<div >
    <div class="_studenttop" >
        <h2><em>class advisor login</em></h2>
    </div>
     <form name="advisor_form" action="advisor2.php" method="GET">
        <input type="text" class="inputtext_reg" id="advisor_name" placeholder="class advisor name*" /><br/>
 		<input type="password"  class="inputtext_reg" id="adv_password" placeholder="password*" />
    	<button type="button" class="regButt button" onclick="checkadv()"><em>login</em></button>
      </form>
	  
</div>


</body>
</html>