<?php
try{
$host =  "localhost";
$dbname= "jobboard";
$user= "root";
$pass= "";

$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo $e->getMessage();
}

// define("APPURL","http://localhost/jobboard");
// if($conn==true){
//     echo "connected successfully";
// }else{
//     echo"err";
// }



?>
