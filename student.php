<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" src="styler.css" />
</head>

<body>
<div class="_student">
    <?php include 'advisor.php'; 
	include 'topbar.php'; 
	?>

    <div class="_studenttop" >
        <h2><em>student login</em></h2>
    </div>
	     <form name="student_form" action="studentdata.php" method="GET">
        <input type="text" class="inputtext_reg" name="admissionno" placeholder="admission number*" /><br/>
		<input type="text" class="inputtext_reg" name="regno" placeholder="roll number*" />
    	<input type="submit" class="regButt button" value="view">
      </form>
	 
</div>
</body>
</html>