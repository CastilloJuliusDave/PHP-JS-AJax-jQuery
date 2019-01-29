<div class="card reg_card card-fluid m-2">
	<div class="card-header card-header">
		<h3 class="text-white">Register</h3>
	</div>
	<div class="card-body">
		<form action="" method="post" name="login">
			<div class="form-row p-3 text-white">
			    <div class="form-group col-md-4">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
			    </div>
			    <div class="form-group col-md-4">
				    <label for="lastname">Middle Name</label>
				    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
			    </div>
			    <div class="form-group col-md-4">
				    <label for="middlename">Last Name</label>
				    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" required>
			    </div>
			    <div class="w-100"><br></div>
			    <div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			    </div>
			    <div class="form-group col-md-6">
				    <label for="confirm_email"> Confirm Email</label>
				    <input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Confirm Email" required>
			    </div>
			    <div class="w-100"><br></div>
			    <div class="form-group col-md-5">
				    <label for="mainphone">Main Phone Number</label>
				    <input type="text" class="form-control" id="mainphone" name="mainphone" placeholder="Main Phone Number" required>
			    </div>
			    <div class="form-group col-md-5">
				    <label for="homephone">Home Phone Number</label>
				    <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Home Phone Number" required>
			    </div>
			    <div class="w-100"><br></div>
			    <div class="form-group col-md-12">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
			    </div>
			    <div class="w-100"><br></div>
			    <div class="form-group col-md-6">
					<label for="bday">Birth Day</label>
					 <input class="form-control" id="bday" name="bday" type="date" data-input-style="box" placeholder="Please Select..." required/>
			    </div>
			    <div class="form-group col-md-6">
				    <label for="Gender">Gender</label>
				    <select name="gender" id="gender" class="form-control">
				    	<option value="Male" selected>Male</option>
				    	<option value="Female" >Female</option>
				    </select>
		  		</div>
			</div>
			<div class="form-group">
			    <div class="form-check">
						<input class="btn btn-primary float-right" type="submit" name="submit_registration" value="Register">									<br>
			    </div>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<div class="d-flex justify-content-center">
			<a class="float-right" href="login.php">Already Registered Click Here!</a>
		</div>
	</div>
</div>