<?php

$servername = "localhost";
$username = "id186072_anil";
$password = "anilbro321";
$dbname = "id186072_anil";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*
$sql = "CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT ,
class_id INT(10) NOT NULL,
name VARCHAR(10) NOT NULL,
surname VARCHAR(10) NOT NULL,
PRIMARY KEY (id)
)";
*/
/*
$sql = "CREATE TABLE department (
id INT NOT NULL 
)";
*/

$sql = "CREATE TABLE employee (
id INT NOT NULL,
dept_id INT NOT NULL,
FOREIGN KEY (dept_id) REFERENCES department(id)
";




 /*$sql = "CREATE TABLE dot_table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
contact_no INT(10) NOT NULL,
password  VARCHAR(50) NOT NULL,
full_name  VARCHAR(50) NOT NULL, 
email VARCHAR(50) ,
blood_group VARCHAR(10) NOT NULL,
age  INT(2) UNSIGNED NOT NULL,
blood_pressure VARCHAR(20),
sex CHAR(1) NOT NULL,
address VARCHAR(50) NOT NULL,
notif_enabled BIT DEFAULT 1,
last_donated VARCHAR(30),
address_coordinate VARCHAR(50),
ip_address VARCHAR(20),
weight VARCHAR(8),
ip_signup VARCHAR(20),
ip_notif VARCHAR(20),
ip_accepted VARCHAR(20),
login_stamp INT,
login_token VARCHAR(20),
credit_point INT(6),
credit_log VARCHAR(40),
donation_eligible BIT,
verify_token VARCHAR(30),
verify_email_token VARCHAR(30),
acc_verify BIT DEFAULT 0,
acc_timestamp INT,
verify_email BIT DEFAULT 0,
d_ref1 VARCHAR (30), 
r_ref1 VARCHAR (30),
d_ref2 VARCHAR (30), 
r_ref2 VARCHAR (30),
d_ref3 VARCHAR (30), 
r_ref3 VARCHAR (30),
d_ref4 VARCHAR (30), 
r_ref4 VARCHAR (30),
d_ref5 VARCHAR (30),
d_ref6 VARCHAR (30),
d_ref7 VARCHAR (30),
d_ref8 VARCHAR (30),
d_ref9 VARCHAR (30),
d_ref10 VARCHAR (30),
r_ref5 VARCHAR (30),
r_ref6 VARCHAR (30),
r_ref7 VARCHAR (30),
r_ref8 VARCHAR (30),
i_d_ref1 VARCHAR (30), 
i_r_ref1 VARCHAR (30),
i_d_ref2 VARCHAR (30), 
i_r_ref2 VARCHAR (30),
i_d_ref3 VARCHAR (30), 
i_r_ref3 VARCHAR (30),
i_d_ref4 VARCHAR (30), 
i_r_ref4 VARCHAR (30),
i_d_ref5 VARCHAR (30),
i_d_ref6 VARCHAR (30),
i_d_ref7 VARCHAR (30),
i_d_ref8 VARCHAR (30),
i_d_ref9 VARCHAR (30),
i_d_ref10 VARCHAR (30),
i_r_ref5 VARCHAR (30),
i_r_ref6 VARCHAR (30),
i_r_ref7 VARCHAR (30),
i_r_ref8 VARCHAR (30),
gps_coordinate_1 VARCHAR(30),
gps_coordinate_2 VARCHAR(30),
gps_coordinate_3 VARCHAR(30)
)";
*/
//dob to be added in 2nd version


// sql to create table
/*
$sql = "CREATE TABLE usertable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(50) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password CHAR(32) NOT NULL,
address VARCHAR(50) ,
contact_no BIGINT,
reg_date TIMESTAMP
)";

*/
/*
$sql = "CREATE TABLE booktable (
b_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
b_username VARCHAR(30) NOT NULL,
b_name  VARCHAR(50) NOT NULL, 
authors  VARCHAR(50) NOT NULL, 
p_range  VARCHAR(30) NOT NULL,
b_status  VARCHAR(30) NOT NULL,
b_type  VARCHAR(30) NOT NULL,
b_class  VARCHAR(30) NOT NULL,
b_imgdir  VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
*/

/*
$sql = "CREATE TABLE CURDATE()(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
status VARCHAR(50) NOT NULL,
reg_date TIMESTAMP"
*/
/*$sql = "CREATE TABLE bookbase(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(50) NOT NULL,
bookstart TIMESTAMP NOT NULL,
bookmin INT(8) NOT NULL,
status INT 
)";
*/
/*
$sql = "CREATE TABLE dataword (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
status VARCHAR(50) NOT NULL,
reg_date TIMESTAMP"
*/
/*
$sql = "CREATE TABLE dataword (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
status VARCHAR(50) NOT NULL,
reg_date TIMESTAMP"
*/
/*
$sql = "CREATE TABLE recharge (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
rchg_code VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
*/
//$sql="DROP TABLE book2018_01_15";
/*$sql = "CREATE TABLE feedback()(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
feedbackc VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
grade VARCHAR(20) NOT NULL,
reg_date TIMESTAMP
)";
*/
/*
$sql = "CREATE TABLE feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
feedbackc VARCHAR(200) NOT NULL,
name VARCHAR(50) NOT NULL,
address VARCHAR(50) NOT NULL,
grade VARCHAR(20) NOT NULL
)";
*/
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>