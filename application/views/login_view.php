<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png" />

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">
		$(document).ready(function(){
		  $(document).mousemove(function(e){
		     TweenLite.to($('body'), 
		        .5, 
		        { css: 
		            {
		                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
		            }
		        });
		  });
		});
	</script>
	<script id="metamorph-1-start" type="text/x-placeholder"></script>
	<script id="metamorph-21-start" type="text/x-placeholder"></script>
	<style type="text/css">
		body{
		    background: url(<?php echo base_url(); ?>assets/img/back.png);
			background-color: #444;
		    background: url(<?php echo base_url(); ?>assets/img/pinlayer2.png),url(<?php echo base_url(); ?>assets/img/pinlayer.png),url(<?php echo base_url(); ?>assets/img/back.png);    
		}
	</style>
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
	
    <!-- Icon -->
    <div class="fadeIn first">
		<div id="formHeader"></div>
		<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="lokaloops" width="100%">
    </div>

    <!-- Login Form -->
    <form class="form" method="POST" action="<?php echo base_url() ?>login">
    	<h3 style="margin-top: 15px;">Please sign in</h3>
    	<!-- <small class="text-muted">Connect Lokaloops with your favorite social network</small>
    	<p>
			<a class="btn btn-primary social-login-btn social-facebook" href="/auth/facebook"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-primary social-login-btn social-twitter" href="/auth/twitter"><i class="fa fa-twitter"></i></a>
			</p>
			<p>
			<a class="btn btn-primary social-login-btn social-linkedin" href="/auth/linkedin"><i class="fa fa-linkedin"></i></a>
			<a class="btn btn-primary social-login-btn social-google" href="/auth/google"><i class="fa fa-google-plus"></i></a>
		</p>
		<small class="text-muted">Or sign in with Lokaloops Account</small> -->
      	<input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
      	<input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      	<input type="submit" class="fadeIn fourth" value="Log In">
      	<?php if(isset($error)) { echo $error; }; ?>
    </form>
    <div id="formFooter">
      <small class="create-account text-muted">Dont have a Lokaloops account?  </small>
	  <a href="<?php echo site_url('register') ?>" class="btn btn-block btn-primary" id="ember363">Sign Up</a>
    </div>

  </div>
</div>

</body>
</html>