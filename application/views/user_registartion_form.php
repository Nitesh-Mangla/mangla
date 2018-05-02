
<!DOCTYPE html>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>User Registartion Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  
  <link rel='stylesheet prefetch' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.css'>


      <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">

  
</head>

<body>

  <div ng-controller="DemoCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content id="SignupContent" class="md-whiteframe-10dp" flex-sm>
				<!-- <md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span flex=""></span> <span class="md-headline" align="center">Registartion Here</span> <span flex=""></span> </div>
				</md-toolbar> -->
				<div layout-padding="">
												
						<form name="userForm" method="POST" action="<?php echo base_url();?>index.php/Welcome/user_registration_form" ng-submit="user.submit(userForm.$valid)" enctype="multipart/form-data">
								<div id="msg" align="center" style="color:red;"><?php echo $this->session->flashdata('error_msg');?></div>
								<input type="hidden" name="action" value="signup" />
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>First name</label>
												<input ng-model="user.first_name" name="f_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your First Name">
												<div ng-if="userForm.first_name.$dirty" ng-messages="userForm.first_name.$error" role="alert">
														<div ng-message="required" class="my-message">First Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct First Name.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Last Name</label>
												<input ng-model="user.last_name" name="l_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your Last Name">
												<div ng-if="userForm.last_name.$dirty" ng-messages="userForm.last_name.$error" role="alert">
														<div ng-message="required" class="my-message">Last Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct Last Name.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<p style="font-size: 12px; margin-left: 3px; margin-top: 18px;">Gender: </p>
										<input type="hidden" name="gender" value="{{user.gender}}" />
										<md-radio-group style="margin: 12px 0 19px;" ng-model="user.gender" required>
												<md-radio-button value="Male" class="md-primary">Male</md-radio-button>
												<md-radio-button value="Female">Female</md-radio-button>
										</md-radio-group>
										<md-input-container flex-gt-sm="60">
												<label>Age</label>
												<input required type="date" step="any" name="age" ng-model="user.age" min="13" max="100" placeholder="20" />
												<div ng-if="userForm.age.$dirty" ng-messages="userForm.age.$error" role="alert" multiple>
														<div ng-message="required">DOB is Required.</div>
														<div ng-message="min">Only Above 13 years Old are allowed.</div>
														<div ng-message="max">Sorry {{userForm.age.$viewValue}} years old are not Allowed.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>Email</label>
												<input required type="email" name="email" ng-model="user.email" ng-pattern="/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="someone@example.com" />
												<div ng-if="userForm.email.$dirty" ng-messages="userForm.email.$error" role="alert">
														<div ng-message="required" class="my-message">Email Address is Required.</div>
														<div ng-message="pattern" class="my-message">Enter Correct Email Address. </div>
														<div ng-message="email" class="my-message">Enter Correct Email Address. </div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>New Password</label>
												<input name="password" ng-model="user.password" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required placeholder="********">
												<div ng-if="userForm.password.$dirty" ng-messages="userForm.password.$error" role="alert" multiple>
														<div ng-message="required">Password is Required.</div>
														<div ng-message="pattern">Password should contain at least one number, one lowercase and one uppercase character.</div>
														<div ng-message="minlength">Password should be greater than 8 letters.</div>
														<div ng-message="maxlength">Password Can't be more than 100 letters.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Confirm Password</label>
												<input name="confmPassword" ng-model="user.confmPassword" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required compare-to="user.password" placeholder="********">
												<div ng-if="userForm.confmPassword.$dirty" ng-messages="userForm.confmPassword.$error" role="alert">
														<div ng-message="required">Confirm Password is Required.</div>
														<div ng-message="compareTo">Password Doesn't Match.</div>
												</div>
										</md-input-container>
								</div>
								<md-input-container flex-gt-sm="">
												<label>Country</label>
												<input ng-model="user.country" name="country" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your Country">
												<div ng-if="userForm.country.$dirty" ng-messages="userForm.country.$error" role="alert">
														<div ng-message="required" class="my-message">Your country is Required.</div>
														
												</div>
										</md-input-container>
								<md-input-container flex-gt-sm="">
												<label>City</label>
												<input ng-model="user.city" name="city" required type="text"  placeholder="Your City">
												<div ng-if="userForm.city.$dirty" ng-messages="userForm.city.$error" role="alert">
														<div ng-message="required" class="my-message">Your city is Required.</div>
														
												</div>
										</md-input-container>

										<md-input-container flex-gt-sm="">
												<label>Address</label>
												<input ng-model="user.address" name="address" required type="text"  placeholder="Your Address">
												<div ng-if="userForm.address.$dirty" ng-messages="userForm.address.$error" role="alert">
														<div ng-message="required" class="my-message">Address is Required.</div>
														
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>State</label>
												<input ng-model="user.state" name="state" required type="text"  placeholder="Your state">
												<div ng-if="userForm.state.$dirty" ng-messages="userForm.state.$error" role="alert">
														<div ng-message="required" class="my-message">Your state is Required.</div>
														
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<input ng-model="user.pic" name="pic" required type="file">
												
														
										</md-input-container>
										<?php $error = $this->session->flashdata('error_msg');?>
										<input type="hidden" value="<?php if(isset($error)) echo $error; ?>" id="error"> 
										
						
						<input type="submit" name="submit" value ="Register" onclick= confirm('Do you want to submit?') style="width:100%">
								
						</form>
				</div>
		</md-content>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-messages.min.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js'></script>
<script type="text/javascript">
  $(document).ready(function(){
		var b = $("#error").val();
		$('#msg').html(b);
		});
</script>

    <script  src="<?php  echo base_url();?>js/index.js"></script>




</body>

</html>
