<?php  
$name = $_GET['name'];
$email = $_GET['email'];
$username = $_GET['uname'];
$pass = md5($pass);
$fullpass = $_GET['pass'];
$datetime = date("Y-m-d H:i:s");

include "config/config.php";
$sql_2 = "INSERT INTO user (user_name,user_email,user_user,user_pass,user_fullpass,user_create,user_update,user_delete,user_status) 
                    VALUES ('$name','$email','$username','$pass','$fullpass','$datetime','$datetime','$datetime','1')";
$result_sql_2 = mysql_query($sql_2) or die(mysql_error());

if($result_sql_2){
	echo "<script type='text/javascript'>alert('บันทึกข้อมูล ได้');window.location.href = \"form-insert.php\";</script>";
	//echo "<meta http-equiv ='refresh'content='0;URL=form-inert.php'>";

} else {

	echo "<script>alert('บันทึกข้อมูล  ไม่ได้');window.history.back();</script>";

}
?>