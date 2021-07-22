<?php
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Cache-Control: post-check=0,pre-check=0", false);
  header("Cache-Control: max-age=0", false);
  header("Pragma: no-cache"); 
$home = $_SERVER['DOCUMENT_ROOT']; 
  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat_2</title>	
<link rel="stylesheet" href="css.css">	
<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<div class="BIG">

	<h2 title="Chat:">Chat</h2>
	<div id="content"></div>

		<script>	 
			function show() {
			    // выводим сообщения в блок #messages
			    $.ajax({ // 28
			        url: 'filename.html',
			        timeout: 10000, // время ожидания загрузки сообщений 10 секунд (или 10000 миллисекунд)
			        success: function(data) {
			            $('#content').html(data);
			        },
			        error: function() {
			            $('#content').html("Не удалось загрузить сообщения");
			        }
			    });
			}	
			var interval = 1000; // количество миллисекунд для авто-обновления сообщений (1 секунда = 1000 миллисекунд)

			show(); // 41

			setInterval('show()', interval);
		</script>

 

	<div class="show_rezult">&nbsp;</div>

	<form id="first">
		 <input type="text" size="30" name="name" placeholder="Name - 20 signs"><br>
		 <textarea type="text" size="30" name="mess" placeholder="Message  - 200 signs"></textarea> <br>
		 <input type="button" value="Send" onClick="send()">
	</form>	

</div>

<script src="send.js"></script> 

</body>
</html>