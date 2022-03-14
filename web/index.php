
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>โพส เฟส กลุ่ม ออโต้</title>
    <meta name="description" content="Post FREE to UNLIMITED facebook groups with a click!">
    <meta name="keywords" content="free facebook group poster, fb group poster, facebook group poster, post to facebook groups, facebook auto poster, facebook autoposter, fb autoposter, facebook group autoposter, fb group autoposter">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2020 https://devsakhon.herokuapp.com">
    <meta name="rating" content="general">
    <meta name="distribution" content="Global">
    <meta name="revisit-after" content="30 days">
    <meta name=viewport content="width=device-width">
    <link rel="SHORTCUT ICON" href="img/favicon.ico">
    <meta http-equiv="pragma" content="no-cache" />

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css";>
    
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v13.0&appId=1331617640639225&autoLogAppEvents=1" nonce="wETBabkN"></script>
     <div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="true"></div>
<div id="main">
	<div id="center">
		<div id="text">
			<h1>Auto Facebook Group Poster</h1>
			<h3>Automate your groups postings on Facebook</h3><br><br>
			<h3>Post to unlimited groups for free!<h3>
		</div>
		
		<div id="fb_button">
		<?php
		if (!isset($sess)) {
		echo '<a class="btn btn-block btn-social btn-facebook" href="'.$helper->getLoginUrl( array( 'email','user_status','publish_actions','manage_pages','user_groups' ) ).'" > <i class="fa fa-facebook"></i> Sign in with Facebook</a>';
		}
		?>
		</div>
		
		<div id="footer">
		<strong>&copy; 2020  https://devsakhon.herokuapp.com</strong>
		</div>
	</div>
	
	
</div>

</body>
</html>
