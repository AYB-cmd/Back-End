<?php include 'database.php'?>
<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8" />
  		<title>CHATBOX</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>SHOUT IT!</h1>
			</header>
			<div id="shouts">
				<ul>
					<li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to? </li>
					<?php
					 if ($resultChek > 0){
                      while ($row = mysqli_fetch_assoc($result)){
		
                    echo '<li class="shout"><span>', $row['time_msg'] , ' - </span>  <strong >', $row['user'],' :</strong> ',$row['msg'] ,'</li>';
                     };
                   };?>

				</ul>
			</div>
			<div id="input">
				<form method="post" action="includes/process.php">
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Throw it" />
				</form>
			</div>
		</div>
	</body>
</html>