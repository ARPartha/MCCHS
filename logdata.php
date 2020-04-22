<?php
 
    $server= '192.185.72.58';
    $user  = 'rozarioshop_Admin';
    $pass  = 'abcd1234!@#$abcd'; 
    $db    = 'rozarioshop_Auth'; 
// Create connection
$con = mysqli_connect($server,$user,$pass,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  echo " 

    
   <script src='https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js'></script>
   <script src='https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js'></script>
   
   <script src='https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js'></script> 
  <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
      apiKey: 'AIzaSyCNV0YyhHuXSDYA09raOqm4yltieY3tVUg',
      authDomain: 'mcchs-83f7d.firebaseapp.com',
      databaseURL: 'https://mcchs-83f7d.firebaseio.com',
      projectId: 'mcchs-83f7d',
      storageBucket: 'mcchs-83f7d.appspot.com',
      messagingSenderId: '836225567141',
      appId: '1:836225567141:web:d899394ae2f6f1bd47804c',
      measurementId: 'G-G15VNHW1JB'
  };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // firebase.analytics();
        const db = firebase.firestore();
        firebase.auth().signInAnonymously()
                .catch(function(error) {
                 // Handle errors
            });
</script>
        "; 
        header('index.php');
?>