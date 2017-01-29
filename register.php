<!DOCTYPE html>
<html>
	<?php include('components/head.php') ?>
<body>
	<?php include('components/nav.php') ?>

	<div id="register">
		<div class="container">
			<div class="col m12">
				<h4 class="center-align"> Registration </h4>
				<hr class="short_hr">
			</div>

			<div class="row">
			    <form class="col m6 offset-m3">
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="first_name" type="text" class="validate">
			          <label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" type="text" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate">
			          <label for="password">Confirm Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      	<div class="row">

						 <div class="col m3 offset-m8 log_button">
						 	<a class="right-align waves-effect waves-light btn">Register</a>
						 </div>
					</div>
			      <div class="row login_buttons">
			       
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-facebook-official" aria-hidden="true"></i>
					Register via Facebook</a>
			     
			      </div>
			      <div class="row login_buttons">
			  
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-google-plus" aria-hidden="true"></i>
						Register via Google+</a>
			
			      </div>
			      <div class="row login_buttons">
			    
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
						Register via LinkedIn</a>
			
			      </div>
			    </form>
			  </div>
			</div>
	</div>
	<?php include('components/footer.php') ?>
</body>

	<?php include('components/js.php') ?>
</html>