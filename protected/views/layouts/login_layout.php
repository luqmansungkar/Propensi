
<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset-login.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles-login.css" />
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
			
            <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/cekLogin" method="post">
			
				<label for="username">Username:</label>
				
				<input type="text" id="username" name="username">
				
				<label for="password">Password:</label>
				
				<p><a href="#">Forgot your password?</a></p>
				
				<input type="password" id="password" name="password">
				
				<div id="lower">
				
					<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
					
					<input type="submit" value="Login">
				
				</div><!--/ lower-->
			
			</form>
			
		</div><!--/ container-->
	
                
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	
