<?php
include("db_connection.php");
function create_table($conn)  //database to create table for users
{
  $usertable = "CREATE TABLE user_table (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(30) NOT NULL,
phone_no VARCHAR(30) NOT NULL,
email VARCHAR(50)  NOT NULL,
password VARCHAR(50)  NOT NULL,
address VARCHAR(50)   ,
latitude VARCHAR(20) ,
longitude VARCHAR(20),
phone_verified bit,
email_verified bit,
sign_up_date TIMESTAMP
)";
if ($conn->query($usertable) === TRUE) {
    echo "Table  created successfully";
}
else
{
    echo "Error creating table: " . $conn->error;
}

}

function execute($conn) //this is for initial set up of database just like makemigration
{
  create_table($conn);
}
execute($conn);

 ?>
