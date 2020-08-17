<!doctype html>
<html>
<head>
	<title>demo</title>
</head>
<body>
	<?php
      $Name =$_post{'Name'};
      $Email=$_post{'Email'};
      $password=$_post{'password'};

      $str=<<<EOD

       student name is $Name and email 
       and  passwod is $Email and $password
 EOD;      







	?>
	
</body>
</html>