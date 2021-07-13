<!--<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";

  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Chat</title>

    <link rel="stylesheet" href="style1.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--
**********************************************************
    Chat.js starts from Here
*********************************************************
   -->
    <script type="text/javascript" src="chat.js"></script>

    <script type="text/javascript">

        // ask user for name with popup prompt
        var name = prompt("Enter your chat name:", "<?php echo $_SESSION['username']; ?>");

        // default name is 'User Name'
    	if (!name || name === ' '||name==='') {
    	   name = "<?php echo $_SESSION['username']; ?>";
    	}

    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");

    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");

    	// kick off chat
        var chat =  new Chat();
    	$(function() {

    		 chat.getState();

    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {

                 var key = event.which;

                 //all keys including return.
                 if (key >= 33) {

                     var maxLength = $(this).attr("maxlength");
                     var length = this.value.length;

                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {
                         event.preventDefault();
                     }
                  }
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {

    			  if (e.keyCode == 13) {

                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");
                    var length = text.length;

                    // send
                    if (length <= maxLength + 1) {

    			        chat.send(text, name);
    			        $(this).val("");

                    } else {

    					$(this).val(text.substring(0, maxLength));

    				}


    			  }
             });

    	});
    </script>

</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">

        <h1>Group Chat</h1>

        <p id="name-area"></p>

        <div id="chat-wrap"><div id="chat-area"></div></div>

        <form id="send-message-area">
          <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>

    </div>
<p><!-- <a href="index.php?logout='1'" style="color: red;">logout</a>--><a class="logout" href="index.php?logout='1'"><button class="button button3"type="button">logout</button></a> </p>
</body>

</html>
