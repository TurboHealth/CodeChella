<?php //dbConnect.php
//Db Login Info
function connectToDb(){
    $host="db.csh.rit.edu"; // Host name
    $dbusername="totoro"; // Mysql username
    $dbpassword="cyZydYhqzB97UmhD"; // Mysql password
    $db_name="totoro"; // Database name
    //$tbl_name="0~0"; // Table name
    
    // Connect to server and select databse.
    mysql_connect("$host", "$dbusername", "$dbpassword")or die();
    mysql_select_db("$db_name")or die();
}

?>
