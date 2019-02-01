<?php
	include 'core/init.php';
?>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
		<?php
			include 'includes/sidebar.php';
		?>

        <!-- Page Content  -->
        <div id="content">
			<?php
				include 'includes/top_nav.php';
			?>

			<div class="row">

					<?php
						include 'includes/register.form.php';
					?>
			</div>

            
        </div>
    </div>



  <?php
	include "includes/footer.php";
?> 

</body>

<!-- script sa baba lagi nang footer. thanks boss noli! -->
<script>
	$(document).ready(function() {
		$.validator.setDefaults({
		   errorClass: 'help-block',
		   highlight: function(element) {
		     $(element)
		       .closest('.form-group')
		       .addClass('has-error');
		   },
		   unhighlight: function(element) {
		     $(element)
		       .closest('.form-group')
		       .removeClass('has-error');
		   },
		   errorPlacement: function (error, element) {
		     if (element.prop('type') === 'checkbox') {
		       error.insertAfter(element.parent());
		     } else {
		       error.insertAfter(element);
		     }
		   }
		 });

		// validate the comment form when it is submitted
		$("#commentForm").validate();
		// validate the comment form when it is submitted
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: {
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				},
				confirm_email: {
					required: true,
					email: true,
					equalTo: "#email"
				},
				mainphone: {
					required: true,
					number: true,
					minlength: 11,
					maxlength: 11

				},
				homephone: {
					required: true,
					number: true,
					minlength: 11,
					maxlength: 11
				},
				bday: {
					required: true
				},
				address: {
					required: true
				},
				gender: {
					required: true
				},
			},
			messages: {
				firstname: "Please enter your First Name",
				lastname: "Please enter your Last Name",
				email: "Please enter a valid eEmail Address",
				confirm_email:{
					equalTo: "Please enter the same email"
				},
				mainphone: {
					required: "Please provide a Main Phone Number",
					number:"Please Enter Numbers Only",
					minlength: "Phone number must be 11 Numbers long",
					maxlength: "Phone number must be 11 Numbers long"
				},
				homephone: {
					required: "Please provide a Main Phone Number",
					number:"Please Enter Numbers Only",
					minlength: "Phone number must be 11 Numbers long",
					maxlength: "Phone number must be 11 Numbers long"
				},
				bday: "Please enter your Birth Date",
				address: "Please enter your Address",
				gender: "Please choose your Gender"
			}
		});
	});


	$(document).ready(function() {
	    $('#example').DataTable();
	} );

</script>

</html>