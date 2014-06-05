<?php
$username = “root”;
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db(“MerchantTest1”,$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM accounts”);

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo “ID:”.$row{'id'}." Name:".$row{‘name’}.” 
   ".$row{‘signup_date’}.”<br>";
if($_POST) {
    if($_POST['username'] == ‘.$row{‘name’}’) {
    echo '{"success":1}';
 } else {
    echo '{"success":0,"error_message":"Username and/or password is invalid."}';
}
}else {    echo '{"success":0,"error_message":"Username and/or password is invalid."}';}
}
//close the connection
mysql_close($dbhandle);
?>