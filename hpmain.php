<!DOCTYPE HTML>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php date_default_timezone_set("America/Montreal"); ?>
<script>
$(document).ready(function(){
$("#user").click(function() {
    if ($(this).val() == "user")
        $(this).val("")
});
});

$(document).ready(function(){
$("#pass").click(function() {
    if ($(this).val() == "password")
        $(this).val("")
});
});

//Some new changes 9-01
// some changes for Git test 
</script>

<?php  echo "test"; ?>
</head>
<body>
	<header>
		<span id="login">
			<form name="form" action="" method="get">
				<input type="text" value="user" id="user" name="user"/>
				<input type="password" value="password" id="pass" name="pass" />
				<input type="submit" id="loginbutton" value="Login"</button>
			</form>
		</span>



		<img src="Hplogo.png">
		<h1>Automation</h1>
		<h2>Notification Status</h2>

		<?php
		
			if (isset($_GET['user']))
			{
			$user=$_GET['user'];
			$password= $_GET['pass'];
				if ($user =="admin" && $password == "vlad123")
				{
				echo "<a href='Hpmain.php?add=ture'>Add +</a>"; 
					echo "<script>";
					echo "$(document).ready(function(){";
					echo '$("#loginbutton").click(function() {';
					    echo '$("#login").remove()';
					echo "});";
					echo "});";

					echo '</script>';


				}
			}

		?>
		
		

		
	</header>
	
		

		<div id="problem">
			<div id="firstline">
				<div id="prob">Problem</div>		
				<div id="status">The status is!</div>
				<div id="date">Today date</div>
			</div><br>
				<div id="desc">The description of the problem</div>
		</div>	


		<?php 
		function addNotification()
		{

		$today = date("F j, Y");  

			echo '<div id="problem">';
				echo '<div id="firstline">';
					echo '<div id="prob"><input></div>';		
					echo '<div id="status"><input></div>';
					echo '<div id="date"><input value="'; echo $today; echo'"></div>';
				echo '</div><br>';
					echo '<div id="desc"><textarea></textarea></div>';
					echo '<input id="submit" type="submit">';
			echo '</div>';	
		}
		if (isset($_GET['add'])) 
		{
			addNotification();
		}

		?>





</body>
</html>
