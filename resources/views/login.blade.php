<html>

	<head>
		<title> Applicant LogIn | ASEM Admission</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
	</head>

	<body>

		<div id="wrapper">



				<div id="header"></div>
			<!--- End of Header --->




				<div id="logo" style="background: url({!! asset('img/asemAdmissionLogo.png') !!}); background-size: 100%; background-repeat: no-repeat;"></div>






				<div id="menu">
						<div class="logIn">
							<b> Applicant LogIn </b>
						</div>
				</div>




				<!--- Applicant LogIn --->
				<div id="applicantLogIn">
					<form  action="{{url('login')}}" method="post">
						@csrf



					<table>

					<tr>
						<td>
							<label> Username </label>
						</td>
						<td>
							<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>


															@if ($errors->has('username'))
																	<span class="invalid-feedback">
																			<strong>{{ $errors->first('username') }}</strong>
																	</span>
															@endif
						</td>
					</tr>

					<tr>
						<td>
							<label> Password </label>
						</td>
						<td>
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

															@if ($errors->has('password'))
																	<span class="invalid-feedback">
																			<strong>{{ $errors->first('password') }}</strong>
																	</span>
															@endif
													</div>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<button type="submit" class="btn btn-primary">
																	Login
															</button>

						</td>
					</tr>
</form>
					<tr>
						<td colspan="2" style="padding-top: 20px;">
							<a href="#">Forgot the password?</a> | <a href="{{url('register')}}"> Create an account </a>
						</td>
					</tr>

					</table>
				</div>



			<!--- Footer --->
		<div id="footer">
			<hr/>

			<div class="contacts">

				<h3> Contacts </h3>
				<img src="img/location.png" /> str.Banulescu-Bodoni 61, Chișinău <br/>
				<img src="img/mail.png" /> anticamera@ase.md <br/>
				<img src="img/phone.png" /> 22-41-28, 22-19-68

			</div>

			<div class="terms">
				© 2018 <br />
				All rights reserved. <br />
				<a href="#">Terms and conditions.</a>

			</div>

		</div>
		<!--- End of the Footer --->



		<!--- End of the wrapper --->
	</div>

<script type="text/javascript" src="{{ URL::asset('js/step.js') }}"></script>
	</body>

<html>
