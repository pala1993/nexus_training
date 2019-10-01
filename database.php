<?php


$servername ="localhost";
$username="root";
$password="";
$dbname="mydb_2";

$con=mysqli_connect($servername,  $username,  $password, $dbname);

if(!$con){
    echo"connection failed:" . mysqli_connect_error();
}
echo "connected successfully";

$createTable = 'CREATE TABLE  `nexus_contact_details` 
(    
   `inst_ID` INTEGER NOT NULL AUTO_INCREMENT ,
   `firstname` VARCHAR( 255 ) ,
   `email` VARCHAR( 255 ) ,
   `sub` VARCHAR( 255 ) ,
   `msg` VARCHAR( 255 ) ,
 
   PRIMARY KEY `inst_ID`(`inst_ID`)
) ENGINE = INNODB DEFAULT CHARSET = utf8;'

if(mysqli_query($con, $createTable)){
    echo "Table Created successfully";

    $x ="INSERT INTO form (firstname, email, sub, msg) VALUES('".$_POST[firstname]."', '".$_POST[email]."', '.$_POST[sub].','.$_POST[msg].')";

    if(mysqli_query($con, $x)){
    echo "Data inserted successfully";
    }
    else{
        echo "Table" . $x."<br>" . mysqli_error($con);
    }

    }
    else{
        echo "Table" . $createTable."<br>" . mysqli_error($con);
    }
//  $firstname = $_POST['Firstname'];
//  $email=$_POST["Email"];
// $sub=$_POST["Sub"];
//  $msg =$_POST["Msg"];

