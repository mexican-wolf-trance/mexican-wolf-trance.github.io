﻿<!DOCTYPE html>

<html lang="us_EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery_custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="website.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="JavaScript/validate.js"></script>
    
    <title id="evenforthetitlequestionmark">
        Registration
    </title>
</head>

<body id="itsthebody">
		<?php
			include 'inputValidate.php';
		?>
   <header>
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="website.html" id="id1">Home</a>
                <a href="registration.php" id="id2">Registration</a>
                <a href="animations.html" id="id3">Animations<br/>(seisure warning)</a>
                <a href="http://www.patience-is-a-virtue.org/" target="_blank" id="id4">Get out</a>
                
              </div>
              
              <!-- Use any element to open the sidenav -->
              <span id="menu" onclick="openNav()">menu</span>
   </header>



<div class="container-fluid" id="moreBlack">
        <h2 class="text-center" id="headerz">
                
                Maybe consider registering your soul...<br/>
                ..so you can keep up with the latest news!
                
        </h2>
    <div class="row" id="formtablerow">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hideMenu regimg">
                <a href="website.html" id="tehhomepage">Home</a><br/>
                <a href="registration.php" id="registrationpage">Registration</a><br/>
                <a href="animations.html" id="animationspage">Animations<br/>(seizure warning)</a><br/>
                <a href="http://www.patience-is-a-virtue.org/" target="_blank">Get out</a><br/>
        
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="formtablecolumnthefirst">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="formtablecolumn">
                <table align="center" id="formstable">
					<form method="POST" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myForm" >
					<tr>
						<td>
					     <label for="userName" id="userName">User Name:</label>
						</td>
						<td>
						    <input type="text"  id="userName" name="userName" value="<?php echo isset($_POST["userName"]) ? $_POST["userName"] : ''; ?>" onblur="validateUserName(this) ;" title="Minimum 6 characters" />
						    <span id="userNameInput" class="<?=($nameErr)?'errorInput':'correctInput'?>" ><?php if ($nameCor=="1"){echo '&#10003';}else{echo $nameErr;}?></span>
					    </td>
			        </tr>
			        <tr>
			            <td>
			                 <label for="passWord" id="password">Password:  </label>
			            </td>
			            <td>
						     <input type="password" title="Minimum 8, Maximum 50, 1 Uppercase, 1 Lowercase, 1 Digit, 1 Special Character" id="passWord"
			                 name="passWord"  minlength="8" onblur="validatePassWord(this) ;" value="<?php echo isset($_POST["passWord"]) ? $_POST["passWord"] : ''; ?>" required/>
						     <span id="passWordError" class="<?=($passErr)?'errorInput':'correctInput'?>" ><?php if ($passCor=="1"){echo '&#10003';}else{echo $passErr;}?></span>
			            </td>
					</tr>
					<tr>
						<td>
							 <label for="repeatPass" id="repeatPass">Repeat Password:  </label>
						</td>
						<td>
						    <input type="password" id="repeatPass" name="repeatPass" onblur="validatePassWordConf(this) ;" title="Passwords must match" required/>
							<span id="passConfError" class="<?=($rPassErr)?'errorInput':'correctInput'?>" ><?php if ($rPassCor=="1"){echo '&#10003';}else{echo $rPassErr;}?></span>
			            </td>
					</tr>
					<tr>
			            <td>
			                <label for="firstName" id="firstname">First Name:</label>
			            </td>
			            <td>
							<input type="text"  id="firstName" title="Max 50" name="firstName" onblur="validateFirstName(this) ;" value="<?php echo isset($_POST["firstName"]) ? $_POST["firstName"] : ''; ?>" required/>
							<span id="firstNameError" class="<?=($fNameErr)?'errorInput':'correctInput'?>" ><?php if ($fNameCor=="1"){echo '&#10003';}else{echo $fNameErr;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							<label for="lastName" id="lastname">Last Name: </label>
						</td>
						<td>
							<input type="text"  id="lastName" name="lastName" title="Max 50" onblur="validateLastName(this) ;" value="<?php echo isset($_POST["lastName"]) ? $_POST["lastName"] : ''; ?>" required />
							<span id="lasteNameError" class="<?=($lNameErr)?'errorInput':'correctInput'?>" ><?php if ($lNameCor=="1"){echo '&#10003';}else{echo $lNameErr;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							 <label for="address" id="address1">Address Line 1  </label>
						</td>
						<td>
							 <input type="text"  id="address1" name="address1" title="Max 100" onblur="validateAddress1(this) ;" value="<?php echo isset($_POST["address1"]) ? $_POST["address1"] : ''; ?>" required/>
							 <span id="address1Error" class="<?=($add1Err)?'errorInput':'correctInput'?>" ><?php if ($add1Cor=="1"){echo '&#10003';}else{echo $add1Err;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							 <label for="address2" id="address2">Address Line 2:  </label>
						</td>
						<td>
							 <input type="text"  id="address2" name="address2"  title="Optional if you have an apt or PO box" onblur="validateAddress2(this) ;" value="<?php echo isset($_POST["address2"]) ? $_POST["address2"] : ''; ?>" />
							 <span id="address2Error"></span>
						</td>
					</tr>
					<tr>
						<td>
							 <label for="city" id="city">City:  </label>
						</td>
						<td>
							 <input type="text"  id="city" onblur="validateCity(this) ;" name="city" title="Please enter the name of your city" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : ''; ?>" required/>
							 <span id="cityError" class="<?=($cityErr)?'errorInput':'correctInput'?>" ><?php if ($cityCor=="1"){echo '&#10003';}else{echo $cityErr;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							<label for="state" id="state">State: </label>
						</td>
						<td>
							<select name="state" id="Irefusetoputinanidforeverystate" required>
							<!--	<?php
									for ($i = 0; $i <= 50; $i++) 
									{
										$selected = ($selectedState || $stateVal[i] == $state) ? "selected='selected'" : "";
										echo "<option value='echo $stateVal[i]?>' <?php echo $selected>$stateVal[i]</option>";
									}
								?>-->
								<option value="">Select</option>
								 <option value="AL">Alabama</option>
								 <option value="AK">Alaska</option>
								 <option value="AZ">Arizona</option>
								 <option value="AR">Arkansas</option>
								 <option value="CA">California</option>
								 <option value="CO">Colorado</option>
								 <option value="CT">Connecticut</option>
								 <option value="DE">Delaware</option>
								 <option value="FL">Florida</option>
								 <option value="GA">Georgia</option>
								 <option value="HI">Hawaii</option>
								 <option value="ID">Idaho</option>
								 <option value="IL">Illinois</option>
								 <option value="IN">Indiana</option>
								 <option value="IA">Iowa</option>
								 <option value="KS">Kansas</option>
								 <option value="KY">Kentucky</option>
								 <option value="LA">Louisiana</option>
								 <option value="ME">Maine</option>
								 <option value="MD">Maryland</option>
								 <option value="MA">Massachusettes</option>
								 <option value="MI">Michigan</option>
								 <option value="MN">Minnesota</option>
								 <option value="MI">Mississippi</option>
								 <option value="MO">Missouri</option>
								 <option value="MT">Montana</option>
								 <option value="NE">Nebraska</option>
								 <option value="NV">Nevada</option>
								 <option value="NH">New Hampshire</option>
								 <option value="NJ">New Jersey</option>
								 <option value="NM">New Mexico</option>
								 <option value="NY">New York</option>
								 <option value="NC">North Carolina</option>
								 <option value="ND">North Dakota</option>
								 <option value="OH">Ohio</option>
								 <option value="OK">Oklahoma</option>
								 <option value="OR">Oregon</option>
								 <option value="PA">Pennsylvania</option>
								 <option value="RI">Rhode Island</option>
								 <option value="SC">South Carolina</option>
								 <option value="SD">South Dakota</option>
								 <option value="TN">Tennessee</option>
								 <option value="TX">Texas</option>
								 <option value="UT">Utah</option>
								 <option value="VT">Vermont</option>
								 <option value="VA">Virginia</option>
								 <option value="WA">Washington</option>
								 <option value="WV">West Virginia</option>
								 <option value="WI">Wisconson</option>
								 <option value="WY">Wyoming</option>
							</select>
							<span id="stateError" class="<?=($stateErr)?'errorInput':'correctInput'?>" ><?php if ($stateCor=="1"){echo '&#10003';}else{echo $stateErr;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							 <label for="zipCode" id="zipCode">Zipcode:  </label>
						</td>
						<td>
							 <input type="text"  id="zipCode" name="zipCode" title="At least 5 digits" onblur="validateZipCode(this) ;" placeholder="#####-####" value="<?php echo isset($_POST["zipCode"]) ? $_POST["zipCode"] : ''; ?>" required/>
							 <span id="zipCodeError" class="<?=($zipErr)?'errorInput':'correctInput'?>" ><?php if ($zipCor=="1"){echo '&#10003';}else{echo $zipErr;}?></span>
						</td>
					</tr>
				</table>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="formtable2">
				<table align="center">
					<tr>
						<td>
							<label for="telephone" id="telePhone">Telephone:  </label>
						</td>
						<td>
							<input type="text" id="telephone" name="telephone" title="Must be 10 digits" onblur="validateTelephone(this) ;" placeholder="xxx-xxx-xxxx" value="<?php echo isset($_POST["telephone"]) ? $_POST["telephone"] : ''; ?>" />
							<span id="telephoneError" class="<?=($teleErr)?'errorInput':'correctInput'?>" ><?php if ($teleCor=="1"){echo '&#10003';}else{echo $teleErr;}?></span>
						</td>
					</tr>
						<tr>
						<td>
							<label id="email">E-mail:</label>
                        
						</td>
						<td>
							<input type="text" name="email" title="Please enter a valid email address" placeholder="you@there.this" onblur="validateEmail(this) ;" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" required/>
							<span id="eMailError" class="<?=($emailErr)?'errorInput':'correctInput'?>" ><?php if ($emailCor=="1"){echo '&#10003';}else{echo $emailErr;}?></span>
						</td>
					</tr>
						<tr>
						<td class="gender1">
								<label id="Gender">Gender:</label>
						</td>
						<td class="gender1">
							<label for="Female" id="Feamale">Female:</label>
							<input type="radio" id="Female" name="gender" value="female" checked="checked"/>
							<label for="male" id="male">Male:</label>
							<input type="radio" id="male" name="gender" value="male" />
						</td>
					</tr>
					<tr>
						<td class="gender"></td>
						<td class="gender">
							<label for="other" id="other">Other:</label>
							<input type="radio" id="other" name="gender" value="male" />
						</td>
					</tr>
						<tr>
						<td>
							<label id="maritalStatus">Marital Status:</label>
						</td>
						<td>
							<label for="statusSingle" id="statussingle">Single:</label>
							<input type="radio" id="statusSingle" name="status" value="single" />
							<label for="statusMarried" id="statusmarried">Married:</label>
							<input type="radio" id="statusMarried" name="status" value="married" checked="checked" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="birthDay" id="birtHDay">Birthday:</label>
						</td>
						<td>
							<input type="text" name="birthDay" placeholder="MM/dd/yyyy" title="MM/dd/yyyy" id="datepicker" onblur="validateBirthDay(this) ;" value="<?php echo isset($_POST["birthDay"]) ? $_POST["birthDay"] : ''; ?>" />
							<span id="birthDayError" class="<?=($bDayErr)?'errorInput':'correctInput'?>" ><?php if ($bDayCor=="1"){echo '&#10003';}else{echo $bDayErr;}?></span>
						</td>
					</tr>
					<tr>
						<td>
							<label for="blog" id="bLog">Enter your soul:</label>
						</td>
						<td>
							<textarea id="blog" name="blog" placeholder="Tell me everything..." value="<?php echo isset($_POST["blog"]) ? $_POST["blog"] : ''; ?>"></textarea>
						</td>
					</tr>
					<tr>
						<td>
                
						</td>
						<td>
							<input type="submit" value="Submit" id="lookatalltheseuniqueidsthough" onclick="">
							<input type="button" value="Reset" id="resetButton">
						</td>
					</tr>       
					</form>
				</table>
            </div>
        </div>
    </div>
    <div class="row footer annoying" id="whydoIneedsomanyuniqueids">
        <div class="githubImg col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
            <a href="https://github.com" target="_blank" id="githublink"></a>
        </div>
        <div class="googleImg col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="https://google.com" target="_blank" id="googlelink"></a>
        </div>
        <div class="facebookImg col-lg-4 col-md-4 col-sm-4 col-xs-12" id="atsomepointitbecomestedious">
            <a href="https://facebook.com" target="_blank" id="facebooklinkidiguess"></a>                        
        </div>
    </div>
</div>

		<?php
			if ($isValid) 
			{
				?>
				<form id="hiddenForm" name="hiddenForm" method="POST" action="form1.php">
					<?php
						foreach($_POST as $key => $value) 
						{
							if ($key == "passWord" || $key == "repeatPass")
							{
							?>
								<input name="<?php echo $key;?>" 
								value="<?php echo '--secured--'?>" 
								type="hidden"/>
							<?php
							}
							else
							{
							?>
							<input name="<?php echo $key;?>" 
								value="<?php echo $value;?>" 
								type="hidden"/>
							<?php
							}
						}
					?>
				</form>
				<script>
					document.createElement('form').submit.call(document.getElementById('hiddenForm'));
				</script>
				<?php
			}
		?>


</body>

</html>