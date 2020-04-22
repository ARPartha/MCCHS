<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script> 



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
    width:500px;
    height: 200px;
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
<body>
    <img src="logo.jpeg" alt="" width="150px" height="150px" style="margin-left:46%; border-radius: 80px; margin-top:10px">
    <div  id="paper">
        <!-- <textarea name="comment" id="comment" cols="10" rows="10" ></textarea> -->
        <textarea placeholder="Enter something.." id="comment" name="comment" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none;"></textarea>
        <br>
         <button id="submit" onclick="submit()" href="index.php"> Submit</button>
         <button id="submit" ><a href="index.php" style="text-decoration: none; color:white" >Back</a></button>
    </div>
</body>
</html>


<script>
    var queryString = decodeURIComponent(window.location.search);
    queryString = queryString.substring(1);
    var queries = queryString.split("&");
for (var i = 0; i < queries.length; i++)
{
 // document.write(queries[i] + "<br>");
}
</script>



<script>

         var firebaseConfig = {
                            apiKey: "AIzaSyCNV0YyhHuXSDYA09raOqm4yltieY3tVUg",
                            authDomain: "mcchs-83f7d.firebaseapp.com",
                            databaseURL: "https://mcchs-83f7d.firebaseio.com",
                            projectId: "mcchs-83f7d",
                            storageBucket: "mcchs-83f7d.appspot.com",
                            messagingSenderId: "836225567141",
                            appId: "1:836225567141:web:d899394ae2f6f1bd47804c",
                            measurementId: "G-G15VNHW1JB"
                        };
                        // Initialize Firebase
                        firebase.initializeApp(firebaseConfig);
                       // firebase.analytics();
                       const db = firebase.firestore();
                    
    function submit(){
        var valur = '<?php echo $_GET['id'];?>';
        var status= '<?php echo $_GET['status'];?>';
        console.log(valur);
        console.log(status);
         var value = document.getElementById('comment').value;
         console.log(value);
        // window.location = 'index.php';

            db.collection('requisition').doc(valur).update({
                adminMsg : value,
                requestStatus : status
                })

                alert('sucessful');
              //window.location.href='index.php';
              
    }

       
        

</script>