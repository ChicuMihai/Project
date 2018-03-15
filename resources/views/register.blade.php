<html>

	<head>
		<title> Create an account | ASEM Admission</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






	</head>

	<body>

		<div id="wrapper">


			<!---- Header ---->
				<div id="header"></div>
			<!--- End of Header --->

		<!---------------------------------- ---------------------------------------->

			<!---- Logo ---->
				<div id="logo"style="background: url({!! asset('img/asemAdmissionLogo.png') !!}); background-size: 100%; background-repeat: no-repeat;"></div>
			<!---- End of Logo ---->

		<!---------------------------------- ---------------------------------------->


			<!---- Menu ----->
				<div id="menu">
						<div class="logIn">
							<b> Create an Account </b>
						</div>
				</div> <!---- End of Menu ----->




			<!---------------------------------- ---------------------------------------->

				<!--- Create An Account --->
				<div id="applicantLogIn">

					<table>

						<!--- Log In Information: Username, password, email --->
						<tr>
							<td colspan="2">
								<h3> Login Information</h3>
							</td>
						</tr>
<form action="{{url('register')}}" method="post">
@csrf


@if(session('response'))
						<div class="success">
							{{session('response')}}
						</div>
						@endif
						<tr>
							<td>
								<label>Username</label>
							</td>
							<td>
                <input id="username" type="text" class="form-control{{ $errors->has('userName') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
							</td>
						</tr>

						<tr>
							<td>
								<label>Password</label>
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
							<td>
								<label>Retype password</label>
							</td>
							<td>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</td>
						</tr>

						<tr>
							<td>
								<label>E-mail address</label>
							</td>
							<td>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</td>
						</tr>

					<!--- Personal Information: First, middle and last name, b-day, nationality --->

					<tr>
						<td colspan="2">
							<h3> Personal Information </h3>
						</td>
					</tr>

						<tr>
							<td>
								<label>First Name</label>
							</td>
							<td>
                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
							</td>
						</tr>

						<tr>
							<td>
								<label>Middle Name</label>
							</td>
							<td>
                <input id="middleName" type="text" autofocus>
							</td>
						</tr>

						<tr>
							<td>
								<label>Last Name</label>
							</td>
							<td>
                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
							</td>
						</tr>

						<tr>
							<td>
								<label>Birthday</label>
							</td>
							<td>
								<script>
  $( function() {
    $( "#datepicker" ).datepicker({
			 dateFormat: 'y/m/d',
			changeMonth: true,
     changeYear: true,
     yearRange: "1930:2010"
	 });
  } );
  </script>
	<input type="text" id="datepicker"name="birthday"></p>

							</td>
						</tr>

						<tr>
							<td>
								<label>Nationality</label>
							</td>
							<td>
                <select name="nationalityId" required>
                <option value=""disabled='true'selected='selected'>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                            @endforeach
                </select>
							</td>
						</tr>


						<!-- Sing up button --->

						<tr>
							<td colspan="2">
                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
							</td>
						</tr>

					</table>
          </form>

				</div> <!---- End of Create An Account ----->


			<!---------------------------------- ---------------------------------------->

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
