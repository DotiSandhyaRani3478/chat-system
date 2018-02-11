<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hello AJAX & PHP!! </title>
		<link rel = "stylesheet" href="style.css" media="all"/>
		<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){

				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;

				}
			}

				req.open('GET','chat.php',true);
				req.send('')

		}

		setInterval(function(){ajax(),1000})

		</script>
	</head>

	<body onload ="ajax();">
		<div id ="container">
			<div id = "chat_box">
				<div id ="chat"></div>
				</div>
				<form method = "post" action ="index.php">
					<input type = "text" name = "name" placeholder = "enter name"/>
					<textarea name ="enter message" placeholder = "enter message"></textarea>
					<input type ="submit" name ="submit" value = "Send it "/>
				</form>
		</div>
	</body>
</html>