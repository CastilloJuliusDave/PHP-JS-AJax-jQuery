<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		timer();
		
		function showMsg(){
			$.get("show_msg.php",function(data,status){
				$("#chat_div").html(data);
			});
		}

		function timer(){
			setInterval(showMsg,1000)
		}

		$(document).ready(function(){
			showMsg();
			$("#btn").click(function(){
				$.post("add_chat.php",{name: $("#name").val(),msg:$("#msg").val()},
				function(data,status){
					showMsg();
				})
			});
		});

	</script>
</head>
<body>
<input type="text" id="name" placeholder="Enter Name"><br><br>
<input type="text" id="msg" placeholder="Enter Message"><br><br>
<input type="button" id="btn" value="Send"><br><br>
<div id="chat_div" style="background: #ddd; width: 400px;">Message</div>

</body>
</html>