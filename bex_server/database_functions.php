<?php
require('db_connection.php');


function create_user_table()
{
    $sql = "CREATE TABLE user_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    full_name VARCHAR(50) NOT NULL,
    user_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone_no VARCHAR(15) NOT NULL  ,
    address VARCHAR(50) ,
    verify_class VARCHAR(1),
    reg_date INT(11)
    )";


}

function create_verification_table()
{
    $sql = "CREATE TABLE  verification_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    email_token VARCHAR(50),
    phone_token VARCHAR(50),
    email_token_expiry INT(11),
    phone_token_expiry INT(11),
    phone_verify_state BIT DEFAULT 0,
    email_verify_state BIT DEFAULT 0,
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

}

function create_address_log_table()
{
    $sql = "CREATE TABLE  address_log_table (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    ip_address VARCHAR(20),
    time_val INT(11),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

}


function create_login_handling_table($table_no)
{
    $sql = "CREATE TABLE  login_handling_table".$table_no." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    password_hash VARCHAR(50),
    login_token VARCHAR(50),
    session_token VARCHAR(50),
    cookie_token VARCHAR(50),
    session_expiry INT(11),
    cookie_expiry INT(11),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

}


function create_topic_category_table()
{
    $sql = "CREATE TABLE  topic_category_table (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    category_name INT(6) NOT NULL,
    )";

}



function create_category_mapping_table()
{
    $sql = "CREATE TABLE  category_mapping_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    category_id INT(3) NOT NULL,
    active_status BIT DEFAULT 1,
    session_expiry INT(11),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

}





function create_post_table($table_id)
{
    //this is for table for adding post
    $sql = "CREATE TABLE  post_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    table_id INT(6) NOT NULL,
    post VARCHAR(500) NOT NULL,
    image_link VARCHAR(200),
    video_link VARCHAR(200),
    time_val INT(11)
    )";

//this is for table for storing comment of corresponding post table
    $sql = "CREATE TABLE  comment_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    post_id INT(6),
    time_val INT(11),
    FOREIGN KEY (post_id) REFERENCES "."post_table_".$table_id."(id),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

//this is for storking corresponding sub_comment form comment table
    $sql = "CREATE TABLE  sub_comment_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    comment_id INT(6),
    time_val INT(11),
    FOREIGN KEY (comment_id) REFERENCES "."comment_table_".$table_id."(id),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

//this is for storing corresponding table
    $sql = "CREATE TABLE  reply_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    sub_comment_id INT(6),
    time_val INT(11),
    FOREIGN KEY (sub_comment_id) REFERENCES "."sub_comment_table_".$table_id."(id),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";




    $sql = "CREATE TABLE  upvote_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    password_hash VARCHAR(50),
    login_token VARCHAR(50),
    session_token VARCHAR(50),
    cookie_token VARCHAR(50),
    session_expiry INT(11),
    cookie_expiry INT(11),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

    $sql = "CREATE TABLE  sub_upvote_table_".$table_id." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6) NOT NULL,
    password_hash VARCHAR(50),
    login_token VARCHAR(50),
    session_token VARCHAR(50),
    cookie_token VARCHAR(50),
    session_expiry INT(11),
    cookie_expiry INT(11),
    FOREIGN KEY (user_id) REFERENCES user_table(id)
    )";

}







































/*
$sql="CREATE TABLE gen1
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	type VARCHAR(20) NULL,
	time_val VARCHAR(20),
	field1	VARCHAR(100),
	field2	VARCHAR(100),
	field3 VARCHAR(100),
	field4	VARCHAR(100),
	field5 VARCHAR(100),
	field6 VARCHAR(100),
	field7 VARCHAR(100),
	field8 VARCHAR(100)
)
";

*/
/*
$sql="CREATE TABLE message
(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	sender_id VARCHAR(20),
	receiver_id VARCHAR(20),
	sender_name VARCHAR(40),
	receiver_name VARCHAR(40),
	message VARCHAR(400),
	time_val VARCHAR(3),
	fcm_state BIT
)
";
*/
/*
$sql = "CREATE TABLE tips (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tips VARCHAR(500) NOT NULL,
date VARCHAR(50) NOT NULL)
";
*/
/*
$sql = "CREATE TABLE important_numbers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
contact_no VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
location VARCHAR(50))
";
*/
/*
$sql = "CREATE TABLE blood_contact_no (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
contact_no INT(10) NOT NULL,
blood_group VARCHAR(10) NOT NULL)";
*/
/*
$sql = "CREATE TABLE department (
id INT NOT NULL
)";
*/

/*
$sql = "CREATE TABLE employee (
id INT NOT NULL,
dept_id INT NOT NULL,
FOREIGN KEY (dept_id) REFERENCES department(id))
";
*/
/*
$sql = "CREATE TABLE dot_table (
id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
contact_no BIGINT(12) UNSIGNED NOT NULL,
password  VARCHAR(50) NOT NULL,
full_name  VARCHAR(50) NOT NULL,
email VARCHAR(50),
blood_group VARCHAR(10) NOT NULL,
age  INT(3) UNSIGNED NOT NULL,
blood_pressure VARCHAR(20),
sex CHAR(1) NOT NULL,
address VARCHAR(50) NOT NULL,
per_address VARCHAR(50) ,
temp_address VARCHAR(50) ,
address_latitude VARCHAR(50),
address_longitude VARCHAR(50),
work_address VARCHAR(50) ,
per_address_coordinate VARCHAR(50) ,
temp_address_coordinate VARCHAR(50) ,
work_address_coordinate VARCHAR(50) ,
notif_enabled BIT DEFAULT 1,
last_notified VARCHAR (20),
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
donation_eligible BIT DEFAULT 1,
verify_token VARCHAR(30),
verify_email_token VARCHAR(30),
acc_verify BIT DEFAULT 0,
acc_timestamp INT,
verify_email BIT DEFAULT 0,
d_ref_no INT(4) DEFAULT 0,
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
d_ref_counter INT (3),
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
gps_coordinate_3 VARCHAR(30),
referral_code VARCHAR(10),
verify_time VARCHAR (12),
report_made VARCHAR (6),
report_count VARCHAR(6)

)";
*/
/*
$sql = "CREATE TABLE dot_table (
id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
contact_no INT(10) NOT NULL,
password  VARCHAR(50) NOT NULL,
full_name  VARCHAR(50) NOT NULL,
email VARCHAR(50) ,
blood_group VARCHAR(10) NOT NULL,
age  INT(2) UNSIGNED NOT NULL,
blood_pressure VARCHAR(20),
sex CHAR(1) NOT NULL,
address VARCHAR(50) NOT NULL,
per_address VARCHAR(50),
work_address VARCHAR(50),
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
fcm_token VARCHAR (200),
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
gps_coordinate_3 VARCHAR(30),
referral_code VARCHAR(10),
end_time VARCHAR(12),
report_made VARCHAR (6),
report_count VARCHAR(6),
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

/*
$sql = "CREATE TABLE suggestions (
id_suggestion INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
suggestion VARCHAR(500) NOT NULL,
id_user VARCHAR(30) NOT NULL,
contact_no BIGINT(12)
)";
*/
/*
$sql1="CREATE TABLE request_board (
request_board_id INT AUTO_INCREMENT PRIMARY KEY,
current_ip VARCHAR(50),
id_request VARCHAR(30),
id_user VARCHAR(30),
contact_no BIGINT(12) NOT NULL,
description VARCHAR(200),
time_peroid VARCHAR(15),
blood_group VARCHAR(10))";

if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
}
else
{
    echo "Error creating table Requestboard: " . $conn->error;
}

*/
/*
$sql1="CREATE TABLE request(
request_id INT AUTO_INCREMENT PRIMARY KEY,
current_ip VARCHAR(50),
id_request VARCHAR(30),
id_user VARCHAR(30),
user_name VARCHAR(50),
blood_amount VARCHAR(10),
user_location VARCHAR(50),
req_location VARCHAR (50),
contact_no BIGINT(12) NOT NULL,
age INT(3),
sex VARCHAR(2),
description VARCHAR(200),
time_peroid VARCHAR(15),
blood_group VARCHAR(10),
blood_amount VARCHAR(20),
hospital_name VARCHAR(50),
hospital_address VARCHAR(50);
deadline_stamp VARCHAR(20),
available_state BIT default 1,
gen_timestamp VARCHAR (20),
end_time BIGINT ,
hospital_latitude VARCHAR(50),
hospital_longitude VARCHAR(50);
phone_no BIGINT(12) NOT NULL
)";

*/
/*
$sql1="CREATE TABLE admin_report(
report_id INT AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30),
time_val VARCHAR(12),
reporter_id VARCHAR(10),
reporter_name VARCHAR(30),
reported_id VARCHAR(12),
reported_name VARCHAR(30),
user_name VARCHAR(50),
comment VARCHAR(200),
user_location VARCHAR(50),
req_location VARCHAR (50),
detail1 VARCHAR(50),
detail2 VARCHAR(50)

)";
*/
/*
$sql1="CREATE TABLE user_log_1 (
log_id INT AUTO_INCREMENT PRIMARY KEY,
tyoe VARCHAR(50),
time VARCHAR(30),
field_1 VARCHAR(30),
contact_no BIGINT(12) NOT NULL,
description VARCHAR(200),
time_peroid VARCHAR(15),
blood_group VARCHAR(10))";
*/
if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
}

else
{
    echo "Error creating table Requestboard: " . $conn->error;
}


$conn->close();
?>