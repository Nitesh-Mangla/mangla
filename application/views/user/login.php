
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo  base_url('css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/price-range.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/main.css');?>" rel="stylesheet">
	<link href="<?php echo  base_url('css/responsive.css')?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<?php include("includes/topbar.php");?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						
						<?php $attr = ['method' => 'post'];?>
						<?php echo form_open('Welcome/login_process',$attr);?>
						<div id="msg" align="center" style="color:red;"><?php echo $this->session->flashdata('error'); ?></div> 
						<?php $ipt_attr = ['placeholder' => 'Email Address','name' => 'username',
										  'id' => 'uname'];?>
						<?php echo form_input($ipt_attr);?>
						<?php $psw = ['placeholder' => 'Email Password','name' => 'password'];?>
						<?php echo form_password($psw);?>
						<?php $submit = ['name' => 'submit','class'=>'btn btn-primary center-block' ,'value' => 'Login'];?>
						
						<?php echo form_submit($submit);?>						
						<?php echo form_close();?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo base_url(); ?>index.php/Welcome/user_registration_form" method="post">
							
							<button type="submit" class="btn btn-default" name="signin">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php include("includes/footer.php");?>

  
        <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script src="<?php echo  base_url('js/price-range.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.scrollUp.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo  base_url('js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('js/main.js');?>"></script>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		var b = $("#error").val();
		$("#msg").html(b);
		});
</script>
</html>
