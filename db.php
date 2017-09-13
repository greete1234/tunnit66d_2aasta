<?php
/*
$server = "localhost";
$user = "root";
$pass = "";
$DB_name = "User";
*/
$db = array("server" => "localhost", "user" => "root", "pass" => "", "DB_name" => "user");

$conn= new mysqli($db['server'],$db['user'],$db['pass'],$db['DB_name']);

if($conn -> connect_error) {
    die("No connection. Have a nice day!")
}
$query = "SELECT FROM ms16.user";
$result = $db -> query($sql);
if($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()){
        echo "id: ".$row["id"]."Nimi: ".$row["name"]."Perenimi: ".$row["lastname"]."Isikukood: ".$row["id_code"];
    }
}
?>