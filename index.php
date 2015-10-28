<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Management System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
		<?php

			if(isset($_SESSION['admin_access_error']))
			
			{
				if($_SESSION['admin_access_error']==1)
				{
			
			?>    
			
			<center>
			<h4 style="color:#F00">Wrong Information !!</h4>
			</center>
			
			<?php
				}
				
				unset($_SESSION['admin_access_error']);
			}
		?>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form class="form-signin" action="home.php" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" name="id" placeholder="UserId or Email" required=""/>
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                        <div>
						    
                            <button class="btn btn-default submit" type="submit">Log in</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        </form>
                    <!-- form -->
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i>  User Management System</h1>

                                <p>©2015 All Rights Reserved.</p>
                            </div>
                        </div>
                    
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="home.php">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i>  User Management System</h1>

                                <p>©2015 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>