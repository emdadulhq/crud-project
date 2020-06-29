<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD | Project</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	
	<?php
	/*
	*This app are made for student data
	*/
	if (isset($_POST['send'])){
		//get value from the from
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$dob = $_POST['dob'];
		
		
		//Date of birth validation
		if($dob >= 1990-01-01 && $dob <= 2000-01-01){
			$age_val = true;
		}else{
			$age_val = false;
		}
		
		
		//empty field check for form
		if(empty($name) || empty($email) || empty($cell) || empty($dob)){
			$mess = "<p class=\"alert alert-danger\"> সবগুলো ঘর অবশ্যই পূরণীয় (অত্যাবশ্যক)! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}elseif($age_val == false){
			$mess = "<p class=\"alert alert-warning\"> জন্মতারিখ ০১-০১-১৯৯০ থেকে ০১-০১-২০০০ এর মধ্যে নেই!! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}else{
			$mess = "<p class=\"alert alert-success\"> আপনার প্রদেয় তথ্য সফল ভাবে সংরক্ষন করা হয়েছে! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}
	}
	
	
	
	?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Student Sign Up Form</h2>
				<h3 class="bg bg-danger text-light"> Role for student registration:</h3>
				<ul class="border border-danger">
					<li> অবশ্যই সম্পুর্ন নাম লিখতে হবে। </li>
					<li> অবশ্যই ১১ ডিজিটের মোবাইল নম্বর থাকতে হবে। </li>
					<li> অবশ্যই কোডার্স ট্রাস্ট এর ইমেইল এড্রেস থাকতে হবে। </li>
					<li> জন্মতারিখ অবশ্যই ০১-০১-১৯৯০ থেকে ০১-০১-২০০০ এর মধ্যে হতে হবে। </li>
				</ul>
				
				
				
				<?php
				//for shown error & success massage
				if(isset($mess)){
					echo $mess;
				}
				
				?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Student Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Date of Birth</label>
						<input name="dob" class="form-control" type="date">
					</div>
					<div class="form-group">
						<input name="send" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>