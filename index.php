<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	#box {
    		
    		
    		
    	}
    </style>

</head>

<body>
		
		<?php
		require_once 'backend/user_functions.php';
		if(isset($_POST['user_id']) AND 
		
		isset($_POST['user_password']) AND 
		isset($_POST['user_email']))
		
		$result = add_user($_POST['user_email'], $_POST['user_id'], $_POST['user_password']);
		if($result === TRUE)
		{
			echo 'added new user';}
		else {
			echo $result;
		}
		
		
		?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>The Gouv Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Jonathan Gouvion</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
  				<div id="box">
				<form method="post" id="reg_form">
				<label for="username">ID:</label>
				<input type="text" name="user_id" id="username"/><br/><br/>
				<label for="userpw">Password:</label>
				<input type="text" name="user_password" id="userpw"/><br/><br/>
				<label for="usermail">Email:</label>
				<input type="text" name="user_email" id="useremail"/><br/><br/>
				<button class ="btn btn-success"type="submit">Create</button>
				</form>
		</div>
    </div>

    

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    <script>
			$(function() {
				//handle sumbit event by validating our fields first
				$('#reg_form').submit(function(){
					var patt = /^[a-z][a-zA-Z0-9]{6,20}$/;
					var patt_password = /^[A-Za-z0-9]{6,12}$/;
					var patt_email = /^[A-Za-z0-9]+@[A-Za-z0-9]+\.(com|net|org)$/;
					var patt_caps = /[A-Z]+/;
					var patt_nums = /[0-9]+/;
					
					
					var username = $('#username').val();
					var password = $('#userpw').val();
					var email =$('#useremail').val();
					
					if (!patt.test(username)){
						alert('username is invalid');
						return false;
					}
					 if(!patt_caps.test(password)){
					 	alert('password needs at least one capital letter');
					 	return false;
					 }
					 
					 if(!patt_nums.test(password)){
					 	alert('Your password needs at least one number');
					 	return false;
					 }
					 
					 if(!patt_password.test(password)){
					 	alert('Password length must be between 6 and 12 characters');
					 	return false;
					 }
					
					if(!patt_caps.test(password) || !patt_nums.test(password) || !patt_password.test(password)){
						alert('password is invalid');
						return false;
					}
					if(!patt_email.test(email)){
						alert('email is invalid');
						return false;
					}
				});
			});
		</script>
		

</body>

</html>