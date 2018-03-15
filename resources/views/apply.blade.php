<html>

	<head>
		<title>Applicantion | ASEM Admission</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	</head>

	<body>

		<!---- Begin of the wrapper ---->
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

					<span class="applicantName">
						<span class="info">
							<b> Applicant Name: </b>{{ Auth::user()->username }} | <b>Applicant ID: </b> {{ Auth::user()->id }}
						</span>
					<span>

					<span class="auxiliar">

						<b> You have:</b> <a href="#">1</a> mail

						<span class="logOut">
							| <a href="{{ url('/logout')}}" class="logOut"> Log out <img src="img/logout.png" /></a>
						</span>

					</span>

				</div> <!---- End of Menu ----->


			<!---------------------------------- ---------------------------------------->

			<form method="post" action="{{url('apply')}}">
				@if(session('response'))
										<div class="success">
											{{session('response')}}
										</div>
										@endif
				@csrf

				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				 <!-- Circles which indicates the steps of the form: -->
				  <div class="stepContainer">
					<span class="step">Personal Info --></span>
					<span class="step">Mailing and Residence Address --></span>
					<span class="step">Education History --></span>
					<span class="step">Academic Information --></span>
					<span class="step">English Proficiency --></span>
					<span class="step">Other Information</span>
				  </div>


				  <!-- Personal Info -->
					<div class="tab">
					<table>
						<tr>
							<td>
								<label> First Name </label> <span class="require">*</span>
							</td>
							<td>
								{{ Auth::user()->firstName }}
							</td>
						</tr>

						<tr>
							<td>
								<label> Middle Name </label>
							</td>
							<td>
								{{ Auth::user()->middleName }}
							</td>
						</tr>


						<tr>
							<td>
								<label> Last Name </label> <span class="require">*</span>
							</td>
							<td>
								{{ Auth::user()->lastName }}
							</td>
						</tr>


						<tr>
							<td>
								<label> Nationality </label> <span class="require">*</span>
							</td>
							<td>
							
						 </td>
						</tr>
						<tr>
							<td>
								<label> Second Nationality </label>
							</td>
							<td>
								<select name="snationalityId">
                <option value=""disabled='true'selected='selected'>Select Nationality</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                            @endforeach
                </select>

						  </td>
						</tr>


						<tr>
							<td>
								<label> DIP </label> <span class="require">*</span>
							</td>
							<td>
								<input oninput="this.className=''" name="idnp">
							</td>
						</tr>


						<tr>
							<td>
								<label> Passport ID </label> <span class="require">*</span>
							</td>
							<td>
								<input oninput="this.className=''" name="passportid"id="idnp">
							</td>
						</tr>


						<tr>
							<td>
								<label> Date of Birth </label> <span class="require">*</span>
							</td>
							<td>
							{{Auth::user()->birthday}}

							</td>
						</tr>

						<tr>
							<td>
								<label> Country of Birth </label> <span class="require">*</span>
							</td>
							<td>

								<select name="countryofBirth" required>
                <option value=""disabled='true'selected='selected'>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                            @endforeach
                </select>

							</td>
						</tr>


						<tr>
							<td>
								<label> Gender </label>  <span class="require">*</span>
							</td>
							<td>
								<input type="radio" id="genderMale" value="m" name="gender" class="inputRadio"> Male
								<input type="radio" id="genderFemale" value="f" name="gender" class="inputRadio"> Female
							</td>
						</tr>

						<tr>
							<td>
								<label> Marital Status </label> <span class="require">*</span>
							</td>
							<td>
								<input type="radio" id="1" value="1" name="maritalStatus" class="inputRadio">Married
								<input type="radio" id="0" value="0" name="maritalStatus" class="inputRadio">Single
							</td>
						</tr>

						</table>
				  </div>  <!-- End of Personal Information -->

				<!---------------------------------- ---------------------------------------->


				  <!--- Mailing and Residence Address  --->
				  <div class="tab">
					<table>

						<tr>
							<td>
								<label> Street </label>
							</td>
							<td>
								<input oninput="this.className=''"name="street">
							</td>
						</tr>


						<tr>
							<td>
								<label> City </label>
							</td>
							<td>
								<input oninput="this.className=''" name="city">
							</td>
						</tr>


						<tr>
							<td>
								<label> Country </label>
							</td>
							<td>

								<select id="countryId"name="countryId" required>
                <option value=""disabled='true'selected='selected'>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                            @endforeach
                </select>

							</td>
						</tr>


						<tr>
							<td>
								<label> PO Box </label>
							</td>
							<td>
								<input oninput="this.className=''" name="postCode">
							</td>
						</tr>

						<tr>
							<td>
								<label> Telephone </label>
							</td>
							<td>
								<input oninput="this.className="name="homeNumber">
							</td>
						</tr>


						<tr>
							<td>
								<label> Mobile </label> <span class="require">*</span>
							</td>
							<td>
								<input oninput="this.className=''"name="mobileNumber">
							</td>
						</tr>


						<tr>
							<td>
								<label> E-mail </label>
							</td>
							<td>
								{{ Auth::user()->email }}
							</td>
						</tr>
						<tr>
							<td>
						<label> Emergency Contact Name </label> <span class="require">*</span>
							</td>
							<td>
						<input oninput="this.className=''"name="emergencyName">
							</td>
						</tr>


						<tr>
							<td>
								<label> Emergency Telephone </label> <span class="require">*</span>
							</td>
							<td>
								<input oninput="this.className=''"name="emergencyNumber">
							</td>
						</tr>

					</table>
				 </div>  <!--- End of Mailing and Residence Address --->


				<!---------------------------------- ---------------------------------------->


				  <!--- Education History  --->
					 <div class="tab">
						<table>

							<tr>
								<td>
									<label> High School Name </label> <span class="require">*</span>
								</td>
								<td>
									<input oninput="this.className=''"name="schoolName">
								</td>
							</tr>

							<tr>
								<td>
									<label> High School Address </label> <span class="require">*</span>
								</td>
								<td>
									<input oninput="this.className=''"name="schoolAdress">
								</td>
							</tr>


							<tr>
								<td>
									<label> High School Average </label>
								</td>
								<td>
									<input oninput="this.className=''"name="schoolAvg">
								</td>
							</tr>

						</table>
					 </div> <!--- End of Education History --->


				<!---------------------------------- ---------------------------------------->



				  <!--- Academic Information --->
				  <div class="tab">
					<table>
							<!-- Buget or/and contract choice --->
							<tr>
								<td>
									<label> Contract </label>
								</td>
								<td>
									<input type="radio"  value="1" name="isContract" class="inputRadio">Yes
									<input type="radio"  value="0" name="isContract" class="inputRadio">No
								</td>
								<td>
									<label> Buget </label>
								</td>
								<td>
									<input type="radio"  value="1" name="isBudget" class="inputRadio">Yes
									<input type="radio"  value="0" name="isBudget" class="inputRadio">No
								</td>
							</tr>

							<!--- Profession inputs -->
						<tr>
								<!--- For buget --->

							<td colspan="2">
								<input oninput="this.className=''"name="spec1"> <br/>
								<input oninput="this.className=''"name="spec2"> <br/>
								<input oninput="this.className=''"name="spec3"> <br/>
							</td>

							<!--- For contract --->

							<td colspan="2">
								<input oninput="this.className=''"> <br/>
								<input oninput="this.className=''" ><br/>
								<input oninput="this.className=''"> <br/>
							</td>

						</tr>


					</table>
				  </div>		<!--- End of Academic Information --->


				<!---------------------------------- ---------------------------------------->


				  <!--- English Proficiency  --->
				  <div class="tab">
					<table>

						<tr>
							<td>
								<label> TOEFL </label>
							</td>
							<td>
								<input type="radio"  value="1" name="isToefl" class="inputRadio"> Yes
								<input type="radio"  value="0" name="isToefl" class="inputRadio"> No
							</td>
						</tr>


						<tr>
							<td>
								<label> IELTS </label>
							</td>
							<td>
								<input type="radio" value="1" name="islelts" class="inputRadio"> Yes
								<input type="radio" value="0" name="islelts" class="inputRadio"> No
							</td>
						</tr>


						<tr>
							<td>
								<label> Did you Attend English Courses </label>
							</td>
							<td>
								<input type="radio"  value="1" name="isCourses" class="inputRadio"> Yes
								<input type="radio"  value="0" name="isCourses" class="inputRadio"> No
							</td>
						</tr>


					</table>

				  </div> <!--- End of English Proficiency  --->

				<!---------------------------------- ---------------------------------------->


				  <!--- Other Information  --->
				  <div class="tab">
					<table>

						<tr>
							<td>
								<label> Work Experience </label>
							</td>
							<td>
								<input type="radio"  value="1" name="isEmployed" class="inputRadio"> Yes
								<input type="radio"  value="0" name="isEmployed" class="inputRadio"> No
							</td>
						</tr>


						<tr>
							<td>
								<label> Do you have any disabilities </label>
							</td>
							<td>
								<input type="radio"  value="1" name="disabilities" class="inputRadio"> Yes
								<input type="radio"  value="0" name="disabilities" class="inputRadio"> No
							</td>
						</tr>



						<tr>
							<td>
								<label> Specify </label> <span class="require">*</span>
							</td>
							<td>
								<input oninput="this.className=''">
							</td>
						</tr>


						<tr>
							<td>
								<label> Hobbies </label>
							</td>
							<td>
								<textarea name="hobbies"></textarea>
							</td>
						</tr>

					</table>

				  </div> <!--- End of Other Information  --->

				  <!---------------------------------- ---------------------------------------->


				  <!--- Next/Prev buttons --->
				  <div style="overflow:auto;">
					<div style="float:right;">
					  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
					</div>
				  </div>

					<button type="submit" class="btn btn-primary">
															Submit
													</button>
				 <!--- End of the application form --->
			</form>


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



		    <!-- JS script (step by step application) --->

<script type="text/javascript" src="{{ URL::asset('js/step.js') }}"></script>

	</body>


</html>
