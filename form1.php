<!DOCTYPE html>



<html lang="us_EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="website.css">        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="JavaScript/validate.js"></script>
    
    <title>
        THANKS
    </title>
</head>
<body>
    <header id="thisistheheader">
            <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="howmanyuniqueidattributesistoomanyuniqueidattributes">&times;</a>
                    <a href="website.html" id="gotothehomepageofhtiswebsite">Home</a>
                    <a href="registration.php" id="ifyoulikemyuniqueidattributesyoulllovemypasswords">Registration</a>
                    <a href="animations.html" id="youllneverbruteforcemypasswords">Animations<br/>(seizure warning)</a>
                    <a href="http://www.patience-is-a-virtue.org/" target="_blank" id="myjokeherecannotbetopped">Get out</a>                    
            </div>
                  
                  <!-- Use any element to open the sidenav -->
                  <span id="menu" onclick="openNav()">menu</span>
    </header>

    <div class="container-fluid annoying" id="ImadetheannoyingclassbecausefirefoxkeptaddingpaddingthatIdidntwant">
		<div class="row newsBoxImg" id="">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hideMenu regimg">
				 <a href="website.html" id="tehhomepage">Home</a><br/>
				 <a href="registration.php" id="registrationpage">Registration</a><br/>
				 <a href="animations.html" id="animationspage">Animations<br/>(seizure warning)</a><br/>
				 <a href="http://www.patience-is-a-virtue.org/" target="_blank">Get out</a><br/>
    		</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h2 class="text-center" id="soIhadtospecify1padding">
					THANK YOU FOR YOUR SOUL
				</h2>
				<?php
					foreach($_POST as $key => $value) 
					{
						echo "<b>$key</b> : <i>$value</i>   ";
					}
				?>
			</div>
		</div>
        <div class="row footer annoying" id="almostdonewiththeseuniqeids">
			<div class="githubImg col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="https://github.com" target="_blank" id="homepagegithublink"></a>
			</div>
			<div class="googleImg col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="https://google.com" target="_blank" id="homepagegooglelink"></a>
			</div>
			<div class="facebookImg col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<a href="https://facebook.com" target="_blank" id="homepagefacebooklink"></a>                       
            </div>  
        </div>
    </div>
</body>

</html>