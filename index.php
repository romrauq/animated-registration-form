<?php 

	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_verify = $_POST['password2'];

	}

?>

<?php require 'resources/php/include/header.php' ; ?>
	
	<div class="main-body">
		<div class="heading-container">
			<h1 class="form-heading">Register New Account</h1>
		</div>

		<form method="POST" action="<?php $_SERVER['PHP_SELF']?>" id="login">
			<div class="name-container">
				
				<div class="input-container">
					<!-- FIRST NAME Animated placeholder div -->
					<div id="placeholder-firstname" class="input-placeholder">
						First Name
					</div>
					<input
						type="text"
						name="first_name"
						id="firstname"
						onfocus="window['placeholder-firstname'].classList.add('active')"
						onblur="if (window['firstname'].value.length == 0) window['placeholder-firstname'].classList.remove('active')"
					/>
				</div>

				<div class="input-container">
					<!-- LAST NAME Animated placeholder div -->
					<div id="placeholder-lastname" class="input-placeholder">
						Last Name
					</div>
					<input
						type="text"
						name="last_name"
						id="lastname"
						onfocus="window['placeholder-lastname'].classList.add('active')"
						onblur="if (window['lastname'].value.length == 0) window['placeholder-lastname'].classList.remove('active')"
					/>
				</div>
			</div>

			<div class="input-container">
				<!-- EMAIL Animated placeholder div -->
				<div id="placeholder-email" class="input-placeholder">
					Email Address
				</div>
				<input
					type="email"
					name="email"
					onfocus="window['placeholder-email'].classList.add('active')"
					onblur="if (window['email'].value.length == 0) window['placeholder-email'].classList.remove('active')"
					id="email"
				/>
			</div>

			<div class="input-container">
				<!-- USERNAME nimated placeholder div -->
				<div id="placeholder-username" class="input-placeholder">
					Username
				</div>				
				<input
					type="text"
					name="username"
					id="username"
					onfocus="window['placeholder-username'].classList.add('active')"
					onblur="if (window['username'].value.length == 0) window['placeholder-username'].classList.remove('active')"
				/>
			</div>

			<div class="input-container">
				<!-- PASSWORD Animated placeholder div -->
				<div id="placeholder-password" class="input-placeholder">
					Password
				</div>
				<input
					type="password"
					name="password"
					id="password"
					onfocus="window['placeholder-password'].classList.add('active')"
					onblur="if (window['password'].value.length == 0) window['placeholder-password'].classList.remove('active')"
				/>
				<span id="note2"></span>
			</div>

			<div class="input-container">
				<!-- PASSWORD2 Animated placeholder div -->
				<div id="placeholder-password2" class="input-placeholder">
					Repeat Password
				</div>
				<input
					type="password"
					name="password2"
					id="password2"
					onfocus="window['placeholder-password2'].classList.add('active')"
					onblur="if (window['password2'].value.length == 0) window['placeholder-password2'].classList.remove('active')"
				/>
			</div>

			<button type="submit" name="submit" id="registerButton" class="register-button">
				REGISTER
			</button>
		</form>
	</div>

<?php require './resources/php/include/footer.php'?>
