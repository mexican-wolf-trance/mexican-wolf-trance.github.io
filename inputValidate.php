<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $passErr = $rPassErr = $zipErr = $teleErr = "";
	$fNameErr = $lNameErr = $add1Err = $cityErr = $stateErr = $bDayErr = "";
	$nameCor = $passCor = $rPassCor = $fNameCor = $lNameCor = $cityCor = $emailCor = "";
	$add1Cor = $stateCor = $zipCor = $teleCor = $bDay = $bDayCor = $zip = $tele = "";
	$name = $email = $fName = $lName = $city = $add1 = $state  = $zip = $passW = $rPassW = "";
	$len = 0;
	$isValid = NULL;
	$stateVal = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AS'=>'AMERICAN SAMOA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PW'=>'PALAU',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
	);
	$selectedState = isset($_POST['state']) ? $_POST['state'] : $state;

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$name = test_input($_POST["userName"]);
		if (empty($name)) 
		{
			$nameErr = "</br>Name is required";
		} 
		else 
		{
			$len = strlen($name);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]+$/", $name))
			{
				/*
				The preg_match() function searches a string for pattern, 
				returning true if the pattern exists, and false otherwise.
				*/
				$nameErr = "</br>Only letters and white space allowed";
			} 
			else if ($len < 6)
			{
				$nameErr = "</br>Must be greater than 6 characters";
			}
			else if ($len > 50)
			{
				$nameErr = "</br>Must be less than 50 characters";
			}
			else 
			{
				$nameCor = "1";
			}
		}

		$passW = test_input($_POST["passWord"]);
		if (empty($passW)) 
		{
			$passErr = "</br>Password is required";
			} 
		else
		{
			$regexUpper = '/[A-Z]+/';
			$regexLower = '/[a-z]+/';
			$regexDigit = '/[0-9]+/';
			$illegal = "!#$%^&*()+=-[]';,./{}|:<>?~";
			$len = strlen($passW);
			if (!preg_match($regexUpper, $passW))
			{
				$passErr = "</br>You need one upper case character";
			} 
			else if (!preg_match($regexLower, $passW))
			{
				$passErr = "</br>You need one lower case character";
			}
			else if (!preg_match($regexDigit, $passW))
			{
				$passErr = "</br>You need one digit";
			}
			else if (!strpbrk($passW, $illegal))
			{
				$passErr = "</br>You need one special character";
			}
			else if ($len < 8)
			{
				$passErr = "</br>Must be greater than 6 characters";
			}
			else if ($len > 50)
			{
				$passErr = "</br>Must be less than 50 characters";
			}
			else 
			{
				$passCor = "1";
			}
		}

		$rPassW = test_input($_POST["repeatPass"]);
		if (empty($rPassW)) 
		{
			$rPassErr = "</br>Required";
		} 
		else
		{
			if ($rPassW !== $passW)
			{
				$rPassErr = "</br>Passwords must match";
			}
			else
			{
				$rPassCor = "1";
			}
		}

		$email = test_input($_POST["email"]);
		if (empty($email)) 
		{
			$emailErr = "</br>Email is required";
		} 
		else 
		{
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				/*
				The filter_var() function is the easiest and safest way 
				to check whether an email address is well-formed.
				*/
				$emailErr = "</br>This feels wrong...try again";
			} 
			else 
			{
				$emailCor = "1";
			}
		}

		$fName = test_input($_POST["firstName"]);
		if (empty($fName)) 
		{
			$fNameErr = "</br>First name is required";
		} 
		else 
		{
			$len = strlen($fName);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]+$/", $fName))
			{
				$fNameErr = "</br>Only letters and white space allowed";
			} 
			else if ($len > 50)
			{
				$fNameErr = "</br>Must be less than 50 characters";
			}
			else 
			{
				$fNameCor = "1";
			}
		}
		$lName = test_input($_POST["lastName"]);
		if (empty($lName)) 
		{
			$lNameErr = "</br>Last name is required";
		} 
		else 
		{
			$len = strlen($lName);
			// check if last name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]+$/", $lName))
			{
				$lNameErr = "</br>Only letters and white space allowed";
			} 
			else if ($len > 50)
			{
				$lNameErr = "</br>Must be less than 50 characters";
			}
			else 
			{
				$lNameCor = "1";
			}
		}
		$add1 = test_input($_POST["address1"]);
		if (empty($add1)) 
		{
			$add1Err = "</br>Address is required";
		} 
		else 
		{
			$len = strlen($add1);
			if ($len > 100)
			{
				$add1Err = "</br>Must be less than 100 characters";
			}
			else 
			{
				$add1Cor = "1";
			}
		}

		$city = test_input($_POST["city"]);
		if (empty($name)) 
		{
			$cityErr = "</br>City is required";
		} 
		else 
		{
			$len = strlen($city);
			// check if city only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]+$/", $city))
			{
				$cityErr = "</br>Only letters and white space allowed";
			} 
			else if ($len > 50)
			{
				$cityErr = "</br>Must be less than 50 characters";
			}
			else 
			{
				$cityCor = "1";
			}
		}	
		$state = test_input($_POST["state"]);
		if (empty($state)) 
		{
			$stateErr = "</br>Please select a state";
		} 
		else 
		{
			$stateCor = "1";
		}

		$zip = test_input($_POST["zipCode"]);
		if (empty($zip)) 
		{
			$zipErr = "</br>Required";
		} 
		else 
		{
			$len = strlen($zip);
			if (!preg_match("/^\d{5,10}$/", $zip))
			{
				$zipErr = "</br>Incorrect format";
			} 
			else if ($len != 5 && $len != 9)
			{
				$zipErr = "</br>Must at 5 or 9 digits";
			}
			else 
			{
				$zipCor = "1";
			}
		}

		$tele = test_input($_POST["telephone"]);
		if (empty($tele)) 
		{
			$teleErr = "</br>Required";
		} 
		else 
		{
			if (!preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/", $tele))
			{
				$teleErr = "</br>Incorrect format";
			} 
			else 
			{
				$teleCor = "1";
			}
		}

		$bDay = test_input($_POST["birthDay"]);
		if (empty($bDay)) 
		{
			$bDayErr = "</br>Required";
		} 
		else 
		{
			if (!preg_match("/^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/", $bDay))
			{
				$bDayErr = "</br>Incorrect format";
			} 
			else 
			{
				$bDayCor = "1";
			}
		}
		function setValid($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l) 
		{
			if ($a || $b || $c || $d || $e || $f ||
				 $g || $h || $i || $j || $k || $l)
				{ return false; }
			else
				{ return true; }
		}

		$isValid = setValid($nameErr, $emailErr, $passErr, $rPassErr, $zipErr, $teleErr, $fNameErr, $lNameErr, $add1Err, $cityErr, $stateErr, $bDayErr);
	}




//var_dump($isValid);
	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>