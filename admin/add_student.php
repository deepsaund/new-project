<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!----======== CSS ======== -->
	<link rel="stylesheet" href="reg-style.css">
	
	<!----===== Iconscout CSS ===== -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<title> Regisration Form </title> 
</head>
<body>
	
	
	<div class="container">
		<header>Registration</header>

		<form action="insert.php" enctype="multipart/form-data" method="post">
			<div class="form first">
				<div class="details personal">
					<span class="title">Personal Details</span>

					<div class="fields">
						<div class="input-field">
							<label>Student Name</label>
							<input type="text" placeholder="Enter your name" name="std_name" value="" required>
						</div>

						<div class="input-field">
							<label>Date of Birth</label>
							<input type="date" placeholder="Enter birth date" name="date_of_birth" value="" required>
						</div>

						<div class="input-field">
							<label>Email</label>
							<input type="text" placeholder="Enter your email" name="email" value="" required>
						</div>

						<div class="input-field">
							<label>Mobile Number</label>
							<input type="number" placeholder="Enter mobile number" name="contact" value="" required>
						</div>

						<div class="input-field">
							<label>Gender</label>
							<select name="gender" required>
								<option disabled selected value="">Select gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="others">Others</option>
							</select>
						</div>

						<div class="input-field">
							<label>Category</label>
							<select name="category" required>
								<option disabled selected>Select category</option>
								<option>GENERAL</option>
								<option>SC</option>
								<option>BC</option>
								<option>OBC</option>
								

							</select>
						</div>
					</div>
				</div>

				<div class="details ID">
					<span class="title">Identity Details</span>

					<div class="fields">
						<div class="input-field" >
							<label>ID Type</label>
							<select name="user_type" required>
								<OPtion disabled selected>Select user type</OPtion>
								<OPtion value="student">Student</OPtion>
								<Option value="teacher">Teacher</OPtion>
							</select>    
						</div>
						<div class="input-field">
							<label>User Name</label>
							<input type="text" placeholder="Enter Username"  name="username" required>
						</div>
						<div class="input-field">
							<label>ID Number</label>
							<input type="number" placeholder="Enter ID number" name="id" required>
						</div>
						<div class="input-field">
							<label>Password</label>
							<input type="password" placeholder="Enter password" name="password" required>
						</div>
						<div class="input-field">
							<label>Photo</label>
							<input type="file" name="photo" id="input_import_file" class="form-control">
						
						</div>
					</div >

					<button class="nextBtn">
						<span class="btnText">Next</span>
						<i class="uil uil-navigator"></i>
					</button>
				</div > 
			</div>

			<div class="form second">
				<div class="details address">
					<span class="title">Address Details</span>

					<div class="fields">
						<div class="input-field">
							<label>Nationality</label>
							<input type="text" name="address" placeholder="Enter nationality" required>
						</div>

						<div class="input-field">
							<label>State</label>
							<input type="text" name="address" placeholder="Enter your state" required>
						</div>

						<div class="input-field">
							<label>District</label>
							<input type="text" name="address" placeholder="Enter your district" required>
						</div>
						<div class="input-field">
							<label>City</label>
							<input type="text" name="address" placeholder="Enter your district" required>
						</div>
						
					</div>
				</div>

				<div class="details family">
					<span class="title">Family Details</span>

					<div class="fields">
						<div class="input-field">
							<label>Father Name</label>
							<input type="text" placeholder="Enter father name" required>
						</div>

						<div class="input-field">
							<label>Mother Name</label>
							<input type="text" placeholder="Enter mother name" required>
						</div>
					</div>

					<div class="buttons">
						<div class="backBtn">
							<i class="uil uil-navigator"></i>
							<span class="btnText">Back</span>
						</div>
						
						<button class="sumbit" name="submit">
							<span class="btnText">Submit</span>
							<i class="uil uil-navigator"></i>
						</button>
					</div>
				</div> 
			</div>
		</form>
	</div>

	<script src="reg.js"></script>
</body>
</html>