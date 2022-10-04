<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dang ki</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</head>
<body>
	<?php if(!isset($validation)) {
		$validation = NULL;
	} ?>
	<form method="POST">
		<div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="text" class="form-group" id="exampleInputEmail1" aria-describedby="emailHelp" name = "username">
		    <div class="text-danger">
		    	<?=checkError($validation, 'username')?>
		    </div>
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label" >Password</label>
		    <input type="password" class="form-group" id="exampleInputPassword1" name = "pass">
		    <div class="text-danger">
		    	<?=checkError($validation, 'pass')?>
		    </div>
		 </div>
		 <div class="mb-3 form-check">
		   	 <label class="form-check-label" for="exampleCheck1">Confirm your password</label>
		    <input type="password" class="form-group" name = "repass">
		  	<div class="text-danger">
		    	<?=checkError($validation, 'repass')?>
		    </div>
		  </div>
		  <input type="submit" value="Gui">
	</form>
</body>
</html>