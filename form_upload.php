<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<title>Form Input</title>
</head>
<body>
	<div class="container" style="margin-top:30px">


		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="upload_input.php" >
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ชื่อโครงการ</label>
						<div class="col-sm-10">
							<select class="selectpicker" data-width="28%" name="title">
								<option value="0">- Select -</option>
								<option value="1">ProjectOne</option>
								<option value="2">ProjectTwo</option>
								<option value="3">ProjectThree</option>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">สถานะการดำเนินโครงการ</label>
						<div class="col-sm-10">
							<select class="selectpicker" data-width="28%" name="status">
								<option value="0">- Select -</option>
								<option value="1">Start</option>
								<option value="2">Wait</option>
								<option value="3">Stop</option>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">สถานะระหว่างวันที่</label>
						<div class="col-sm-3">
							<input type="date" class="form-control" id="inputPassword3" name="start">

						</div>
						
						<label for="inputPassword3" class="col-sm-1 control-label">ถึง</label>

						<div class="col-sm-3">
							<input type="date" class="form-control" id="inputPassword3" name="end">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">แนบไฟล์</label>
						<div class="col-sm-3">
							<input type="file" class="form-control" id="inputPassword3" name="fileUp">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">ผู้รายงาน</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputPassword3" placeholder="ผู้รายงาน" name="namereport">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">หมายเลขบัตรประชาชน</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputPassword3" placeholder="หมายเลขบัตรประชาชน" name="idcard">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">วันที่รายงาน</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputPassword3" value="<?php echo date('Y/m/d'); ?>" name="datereport">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-primary" value="บันทัก">
						</div>
					</div>


					


					</form>
				</div>
			</div>
		</div>




		<script src="js/jquery-1.12.4.min.js"></script>	
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	</html>