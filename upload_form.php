<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	include "config/config.php";

	 $title = $_POST['title'];
	 $status = $_POST['status'];
	 $start = $_POST['start'];
	 $end = $_POST['end'];
	//$file = $_FILES["fileUp"]["tmp_name"];
	 $namereport = $_POST['namereport'];
	 $idcard = $_POST['idcard'];
	 $datereport = $_POST['datereport'];
	
	
	$dd = date("Y-m-d");
	$fname = $dd."_".rand(1,9999);
	$web_n = "$fname.pdf";//set file name in folder
	//copy($_FILES["filUploadRecruit"]["tmp_name"],"upload/recruit/".$web_n);
	move_uploaded_file($_FILES["fileUp"]["tmp_name"],"upload/".$web_n);
	
	$path = "upload/".$web_n;

	$sql_2 = "INSERT INTO uploadreport (titleProject,statusProject,startDate,endDate,fileName,filePath,nameReport,idCard,dateReport) 
	VALUES ('$title','$status','$start','$end','$fname','$path','$namereport','$idcard','$datereport')";
	$result_sql_2 = mysql_query($sql_2) or die(mysql_error());
	
	if($result_sql_2){
			
		echo "<meta http-equiv ='refresh'content='0;URL=http://localhost:8888/myDemo8616/form_input.php'>";
			
	} else {

		echo "<script>alert('บันทึกข้อมูล  ไม่ได้');window.history.back();</script>";

	}


	?>
</body>
</html>