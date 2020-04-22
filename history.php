<!DOCTYPE html>
<html>
<head>
    <?php
    // if( !isset( $_SESSION['username'] ) ) {
    //     header("Location: login.php");
    //  }
    include 'header.php';
    ?>
</head>
<body>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">MCCHS <img src="logo.jpeg" alt="" width="50px" style="border-radius: 40px" height="50px"></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
          >
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider" style="float: right;"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Request</a>
                           
                            <a class="nav-link" href="history.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                History </a
                            >
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Bank')">Bank</button>
                <button class="tablinks" onclick="openCity(event, 'Bkash')">Bkash</button>
                </div>

                <div id="Bank" class="tabcontent">
                <h1 class="mt-4">Request</h1> 
                                               
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div> 
                                    <button id="accept" value="accept" onclick="myCheck()">Accept</button>
                                    <button id="reject" value="reject" onclick="myCheck2()">Reject</button>
                                </div>
                                <br>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Saving Number" title="Type in a name">
                                    <table id="bankhTable" class="display" style="width:100%">
                                        <thead>
                                             <tr>
                                                <th style="width:60px";>SL</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>MobileNo</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>SavingNo</th>
                                                <th>Account Holder Name</th>
                                                <th>Account Number</th>
                                                <th>Bank Name</th>
                                                <th>Branch Name</th>
                                                <th>cheque Picture</th>
                                                <th>Status</th>
                                                <th>Admin Message</th>
                                                </tr>
                                        </thead>
                                        <tbody id="bankhlist">
                                                            
                                        </tbody>
                                                         
                                    </table>
                            </div>
                        </div>
                </div>
                <div class="card mb-4">
                        <Button id="bankhexcel">Export Excel</Button>
                </div>
                </div>

                <div id="Bkash" class="tabcontent">
                <h1 class="mt-4">Request</h1> 
                                               
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                            <div> 
                                    <button id="acceptb" value="accept" onclick="myCheck3()">Accept</button>
                                    <button id="rejectb" value="reject" onclick="myCheck4()">Reject</button>
                                </div>
                                <br>
                                <input type="text" id="myInputb" onkeyup="myFunction2()" placeholder="Search By Saving Number" title="Type in a name">
                                    <table id="bkashhTable" class="display" style="width:100%">
                                        <thead>
                                             <tr>
                                             <th style="width:60px";>SL</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>MobileNo</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>Saving No</th>
                                                <th>Bkash Number</th>
                                                <th>cheque Picture</th>
                                                <th>Status</th>
                                                <th>Admin Message</th>
                                                </tr>
                                        </thead>
                                        <tbody id="bkashhlist">
                                                            
                                        </tbody>
                                                         
                                    </table>
                            </div>
                        </div>
                </div> 
                <div class="card mb-4">
                        <Button id="bkashhexcel">Export Excel</Button>
                </div>
                </div>
                <!-- Tab     -->
                 
                    </div>
                </main>
               <?php
                     include 'footer.php';
               ?>
            </div>
                <!--Printing Excel  -->
                <script type="text/javascript">
                ///// Bkash 
                       $('#bkashhexcel').click(function(){
                           XLExport('bkashhTable','bkashhTable'); 
                       }); 
                ///// Bank        
                       $('#bankhexcel').click(function(){
                           XLExport('bankhTable','bankhTable'); 
                       });   
                                           
                            function XLExport(tableId, filename = ''){
                                    var downloadurl;
                                    var dataFileType = 'application/vnd.ms-excel';
                                    var tableSelect = document.getElementById(tableId);
                                    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
                                    
                                    // Specify file name
                                    filename = filename?filename+'.xls':'export_excel_data.xls';
                                    
                                    // Create download link element
                                    downloadurl = document.createElement("a");
                                    
                                    document.body.appendChild(downloadurl);
                                    
                                    if(navigator.msSaveOrOpenBlob){
                                        var blob = new Blob(['\ufeff', tableHTMLData], {
                                            type: dataFileType
                                        });
                                        navigator.msSaveOrOpenBlob( blob, filename);
                                    }else{
                                        // Create a link to the file
                                        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
                                    
                                        // Setting the file name
                                        downloadurl.download = filename;
                                        
                                        //triggering the function
                                        downloadurl.click();
                                    }
                                }
                                
                     
                </script>
                <!--Printing Excel  -->
                <script>
                function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
                }
                </script>
                 <script>
                        function myFunction() {
                        var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("myInput");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        table = document.getElementById("bankhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[6] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
                function myCheck(){
                    var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("accept");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        console.log(filter);
                        table = document.getElementById("bankhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[12] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
                function myCheck2(){
                    var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("reject");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        console.log(filter);
                        table = document.getElementById("bankhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[12] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
                function myCheck3(){
                    var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("acceptb");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        console.log(filter);
                        table = document.getElementById("bkashhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[9] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
                function myCheck4(){
                    var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("rejectb");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        console.log(filter);
                        table = document.getElementById("bkashhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[9] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
                           
               //// bkash
                function myFunction2() {
                        var input, filter, table, tr, td,td2, i, txtValue;
                        input = document.getElementById("myInputb");
                        console.log(input);
                        filter = input.value.toUpperCase();
                        table = document.getElementById("bkashhTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[6] ;
                            td2= tr[i].getElementsByTagName("td")[1] ;
                            if (td ) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            
                            }
                            
                        }
                }
               
</script>

                <!-- Connect To firebase -->
                <script>
                        // Your web app's Firebase configuration
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
                       
            </script>
            <script src="history.js"></script>
                <!-- Connect to firebase -->
</body>
</html> 
