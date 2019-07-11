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
    <form class="form" method="POST" action="<?php echo base_url() ?>register">
    	<h3 style="margin-top: 15px;">Sign Up</h3>
      	<!-- <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
      	<input type="text" id="password" class="fadeIn third" name="password" placeholder="password"> -->
		<input type="text" class="form-control" name="owner" id="owner" placeholder="Nama Outlets">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        <input type="text" class="form-control" name="password" id="password" placeholder="Password">
        <input type="text" class="form-control" name="cpassword" id="password" placeholder="Password">

      	<input type="submit" class="fadeIn fourth" value="Register">
      	<?php if(isset($error)) { echo $error; }; ?>
    </form>
    <div id="formFooter">
      <small class="create-account text-muted">Dont have a Lokaloops or social network account?  </small>
      <a id="ember363" class="btn btn-block btn-primary" href="<?php echo site_url('login') ?>">Sign In</a>
	 
    </div>

  </div>
</div>

</body>
</html>