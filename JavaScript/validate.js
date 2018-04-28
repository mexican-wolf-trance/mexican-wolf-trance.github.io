/*function validateFirstName()
{
    var firstNameElement = document.getElementById("firstName");
console.debug("FirsNameElement: " + firstNameElement);

if (firstNameElement)
    {
        firstNameElement.value = "Gandy";
    }
}*/
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() 
{
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() 
{
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

/*Reset the form since the html button doesn't work*/
$(document).ready(function()
{
    $("#resetButton").click(function()
    {
       $( "#myForm" )[0].reset();
       $( ".errorInput" ).empty();
       $( ".correctInput" ).empty();
       $( "input" ).removeClass("errorInput correctInput");
    })
});
$( function() 
    {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            maxDate: "0d",
            yearRange: "c-100:c+0"
        });
    }
 );
 $( function() {
    $( document ).tooltip({
        hide: { effect: "explode", duration: 1000 },
        show: { effect: "slideDown", delay: 500   },
        track: false
    });
});
/*
 function validateUserName(ele)
 {
     var userValue = ele.value;
     if (userValue.length > 50)
     {
        var errorEle = document.getElementById("userNameError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your user name is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (userValue.length < 6)
     {
        var errorEle = document.getElementById("userNameError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your user name is too short (More than 8)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("userNameError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validatePassWord(ele)
 {
     var regexUpper = /[A-Z]+/;
     var regexLower = /[a-z]+/;
     var regexDigit = /[0-9]/;
     var userValue = ele.value;
     if (userValue.length == 0)
     {
         var errorEle = document.getElementById("passWordError");
         if (errorEle)
         {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Password cannot be empty";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
         }
     }
     else if (userValue.length > 50)
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your password is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (userValue.length < 8)
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your password is too short (More than 8)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (!regexUpper.test(userValue))
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>There must be at least 1 upper case character";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (!regexLower.test(userValue))
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>There must be at least 1 lower case character";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (!/\d/.test(userValue))
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>There must be at least 1 digit";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (!/[!@#$%^&*()-_=+;:'",<.>/?`~{}]+/.test(userValue))
     {
        var errorEle = document.getElementById("passWordError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>There must be at least 1 special character";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("passWordError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validatePassWordConf(ele)
 {
     var userValue = ele.value;
     var passWord = document.getElementById("passWord").value;
     if (userValue !== passWord)
     {
         var errorEle = document.getElementById("passConfError");
         if (errorEle)
         {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Passwords don't match";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
         }
     }
     else
     {
         var errorEle = document.getElementById("passConfError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateFirstName(ele)
 {
     var userValue = ele.value;
     if (userValue.length > 50)
     {
        var errorEle = document.getElementById("firstNameError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your first name is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("firstNameError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateLastName(ele)
 {
     var userValue = ele.value;
     if (userValue.length > 50)
     {
        var errorEle = document.getElementById("lasteNameError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your last name is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("lasteNameError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateAddress1(ele)
 {
     var userValue = ele.value;
     if (userValue.length == 0)
     {
         var errorEle = document.getElementById("address1Error");
         if (errorEle)
         {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Address field cannot be empty";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
         }
     }
     else if (userValue.length > 100)
     {
        var errorEle = document.getElementById("address1Error");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your address is too long (Less than 100)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("address1Error");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateAddress2(ele)
 {
     var userValue = ele.value;
     if (userValue.length > 100)
     {
        var errorEle = document.getElementById("address2Error");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your user name is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("address2Error");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateCity(ele)
 {
     var userValue = ele.value;
     if (userValue.length == 0)
     {
         var errorEle = document.getElementById("cityError");
         if (errorEle)
         {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>City field cannot be empty";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
         }
     }
     else if (userValue.length > 50)
     {
        var errorEle = document.getElementById("cityError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your city name is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("cityError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateState(ele)
 {
     var userValue = ele.value;
     if(!userValue)
     {
        var errorEle = document.getElementById("stateError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>You must select a state";
        }
     }
     else
     {
         var errorEle = document.getElementById("stateError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateZipCode(ele)
 {
     var regexZip = /^\d+$/;
     var userValue = ele.value;
     if (userValue.length == 0)
     {
         var errorEle = document.getElementById("zipCodeError");
         if (errorEle)
         {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Zipcode field cannot be empty";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
         }
     }
     else if (userValue.length > 10)
     {
        var errorEle = document.getElementById("zipCodeError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your zipcode is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (userValue.length < 5)
     {
        var errorEle = document.getElementById("zipCodeError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your zipcode is too short (More than 8)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (!regexZip.test(userValue))
     {
        var errorEle = document.getElementById("zipCodeError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>The zipcode must only contain digits";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("zipCodeError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
            /*if (userValue.length = 10)
            function formatZipCode()
            {
                ele.value.replace(/(\d{5)(\d{5})/, "$1-$2");
           
            }
         }
     }
 }
 function validateTelephone(ele)
 {
     var regexPhone = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
     /*Matches the following:
     123-456-7890
     (123) 456-7890
     123 456 7890
     123.456.7890
     +91 (123) 456-7890//
     var userValue = ele.value;
     /*if (userValue.length != 10)
     {
        var errorEle = document.getElementById("telephoneError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Invalid number";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }//
     if (!regexPhone.test(userValue))
     {
        var errorEle = document.getElementById("telephoneError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Invalid input";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("telephoneError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateEmail(ele)
 {
     var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     var userValue = ele.value;
     if (!regexEmail.test(userValue))
     {
        var errorEle = document.getElementById("eMailError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Invalid email";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else if (userValue.length > 255)
     {
        var errorEle = document.getElementById("eMailError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Your email is too long (Less than 50)";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("eMailError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
 }
 function validateBirthDay(ele)
 {
     var regexBDay = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
     var userValue = ele.value;
     if (!regexBDay.test(userValue))
     {
        var errorEle = document.getElementById("birthDayError");
        if (errorEle)
        {
            ele.classList.remove('correctInput');
            errorEle.classList.remove('correctInput')
            ele.classList.add('errorInput');
            errorEle.classList.add('errorInput');
            errorEle.innerHTML = "<br/>Invalid birthday";
            //ele.focus();
            //setTimeout(function(){ ele.focus(); }, 500);
        }
     }
     else
     {
         var errorEle = document.getElementById("birthDayError");
         if (errorEle)
         {
            ele.classList.remove('errorInput');
            errorEle.classList.remove('errorInput')
            ele.classList.add('correctInput');
            errorEle.classList.add('correctInput');
            errorEle.innerHTML = "&#10003";
         }
     }
}
*/