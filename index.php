<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="resources/css/styles.css" />
		<script defer src="resources/js/scripts.js"></script>
		<title>Register New Account</title>
	</head>

	<body>
		<div class="main-body">
			<div class="heading-container">
				<h1 class="form-heading">Register New Account</h1>
			</div>

			<form action="" id="login">
				<div class="name-container">
					<div class="input-container">
						<input
							type="text"
							name="first_name"
							id="firstname"
							onfocus="window['placeholder-firstname'].classList.add('active')"
							onblur="if (window['firstname'].value.length == 0) window['placeholder-firstname'].classList.remove('active')"
						/>

						<div id="placeholder-firstname" class="input-placeholder">
							First Name
						</div>
					</div>

					<div class="input-container">
						<input
							type="text"
							name="last_name"
							id="lastname"
							onfocus="window['placeholder-lastname'].classList.add('active')"
							onblur="if (window['lastname'].value.length == 0) window['placeholder-lastname'].classList.remove('active')"
						/>

						<div id="placeholder-lastname" class="input-placeholder">
							Last Name
						</div>
					</div>
				</div>

				<div class="input-container">
					<input
						type="email"
						name="email"
						onfocus="window['placeholder-email'].classList.add('active')"
						onblur="if (window['email'].value.length == 0) window['placeholder-email'].classList.remove('active')"
						id="email"
					/>
					<div id="placeholder-email" class="input-placeholder">
						Email Address
					</div>
				</div>

				<div class="input-container">
					<input
						type="text"
						name="username"
						id="username"
						onfocus="window['placeholder-username'].classList.add('active')"
						onblur="if (window['username'].value.length == 0) window['placeholder-username'].classList.remove('active')"
					/>
					<div id="placeholder-username" class="input-placeholder">
						Username
					</div>
				</div>

				<div class="input-container">
					<input
						type="password"
						name="password"
						id="password"
						onfocus="window['placeholder-password'].classList.add('active')"
						onblur="if (window['password'].value.length == 0) window['placeholder-password'].classList.remove('active')"
					/>
					<span id="note2"></span>
					<div id="placeholder-password" class="input-placeholder">
						Password
					</div>
				</div>

				<div class="input-container">
					<input
						type="password"
						id="password2"
						onfocus="window['placeholder-password2'].classList.add('active')"
						onblur="if (window['password2'].value.length == 0) window['placeholder-password2'].classList.remove('active')"
					/>
					<div id="placeholder-password2" class="input-placeholder">
						Repeat Password
					</div>
				</div>

				<button type="submit" id="registerButton" class="register-button">
					REGISTER
				</button>
			</form>
		</div>
	</body>
</html>