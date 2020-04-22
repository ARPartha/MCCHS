<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script> 
</head>
<body>
    <div>
        <h5>USER ID: &nbsp;<?php echo $_GET['id'];?></h5>
        <textarea name="comment" id="comment" cols="50" rows="20"></textarea>
        <br>
        <button id="submit" onclick="submit()" href="index.php"> Submit</button>
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
              
    }

       
        

</script>