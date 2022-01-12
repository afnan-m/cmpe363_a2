<?php

// all requires needed 
// require_once('config/config.php');
// require_once('dbo.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Db Operations" content="database operations">
        <title>database operations</title>
    </head>
    
    <body>
llll
    <!-- <?php  




    $servername = "http://cmpe363-meca100.database.windows.net/";
    $username = "cmpe363";
    $password = "Meca1234";
    $dbname = "employeedb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    // // method anas dbo 
    // $db = new dbo();    

    // $id = $db->listEmail("newemail");   
    // echo " id = ".$id[0][USER_ID]."  - Name: " . $id[0][USERNAME]. " - Surname: " . $id[0][USER_SURNAME]. " Email: " . $id[0][USER_EMAIL]. " - Password: ".$id[0][USER_PASSWORD]." <br>";
  

    // // mehtod original 
    // $conn= new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "<br> Connected successfully<br>";

    // $query = "SELECT * FROM `".TBL_USERS."` WHERE `".USER_EMAIL."` = 'newemail'";

    // $result = mysqli_query($conn, $query);
 
    //     $resarray; 

    //     if (mysqli_num_rows($result) > 0) {
         
    //         while ($row = mysqli_fetch_assoc($result)) {

    //             echo "<br> id: " . $row[USER_ID]. " - Name: " . $row[USERNAME]. " - Surname: " . $row[USER_SURNAME]. " Email: " . $row[USER_EMAIL]. " - Password: ".$row[USER_PASSWORD]." <br><br>";

              
    //         }
            
    //     }else return FALSE;


    mysqli_close($conn);








?> --> 



    </body>

    
</html>
