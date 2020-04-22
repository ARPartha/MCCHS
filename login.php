<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
    // include 'header.php';

    ?>
          <style>
            * {
  outline:none;
	border:none;
	margin:0px;
	padding:0px;
	font-family:Courier, monospace;
}
body {
    background-image:url("background.jpg");   
    background-size: auto;     
}
#paper {
    margin-top: 40px;
    color:#FFF;
    align-content: center;
    text-align: center;
    font-size:20px;
    /* width:1000px; */
    height: 300px;
}
#margin {
	margin-left:12px;
	margin-bottom:20px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none; 
}
#comment {
    width:350px;
    height: 20px;
	overflow:hidden;
	background-color:#FFF;
	color:#222;
	font-family:Courier, monospace;
	font-weight:normal;
	font-size:24px;
	resize:none;
	line-height:25px;
	padding-left:100px;
	padding-right:100px;
	padding-top:45px;
	padding-bottom:34px;
	
	background-repeat:repeat-y, repeat;
	-webkit-border-radius:12px;
	border-radius:12px;
	-webkit-box-shadow: 0px 2px 14px #000;
	box-shadow: 0px 2px 14px #000;
	border-top:1px solid #FFF;
	border-bottom:1px solid #FFF;
}
#submit {
	cursor:pointer;
	margin-top:50px;
	
	height:40px;
	padding-left:24px;
	padding-right:24px;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold;
	font-size:20px;
	color:#FFF;
	text-shadow: 0px -1px 0px #000000;
	-webkit-border-radius:8px;
	border-radius:8px;
	border-top:1px solid #FFF;
	-webkit-box-shadow: 0px 2px 14px #000;
	box-shadow: 0px 2px 14px #000;
	background-color: #62add6;
	background-image:url(https://static.tumblr.com/maopbtg/ZHLmgtok7/button.png);
	background-repeat:repeat-x;
}
#submit:active {
	zoom: 1;
	filter: alpha(opacity=80);
	opacity: 0.8;
}
#submit:focus {
	zoom: 1;
	filter: alpha(opacity=80);
	opacity: 0.8;
}
#wrapper {
	width:700px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	margin-top:24px;
	margin-bottom:100px;
}
        </style>

    </head>
    <body class="bg-primary">
        <div id="wrapper">
        <img src="logo.jpeg" alt="" width="150px" height="150px" style="margin-left:45%; border-radius: 80px">
            <form id="paper" method="post" action="logdata.php">
                <input placeholder="Enter Email" id="comment" name="email"  style="overflow: hidden; word-wrap: break-word; resize: none; "></input> 
               <input placeholder="Enter password" id="comment" name="pass"  style="overflow: hidden; word-wrap: break-word; resize: none;margin-top:20px; "></input> 
                <br>
                <input id="submit" type="submit" value="login">
                
            </form>

        </div>
        
    </body>
</html>
