<!DOCTYPE html>
<html>
	<?php include('components/head.php') ?>
<body>
	<?php include('components/nav.php') ?>

	<div id="login">
		<div class="container">
			<div class="col m12">
				<h4 class="center-align"> User Login </h4>
				<hr class="short_hr">
			</div>

			<div class="row">
			    <form class="col m6 offset-m3">
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>

			      	<div class="row">
			      		<div class="col m6">
					        <div class="switch">
							    <label>
							      
							      <input type="checkbox">
							      <span class="lever"></span>
							      
							    </label>
					          	Remember?
						  	</div>
						 </div>
						 <div class="col m3 offset-m3 log_button">
						 	<a class="right-align waves-effect waves-light btn">Login</a>
						 </div>
					</div>
			      <div class="row login_buttons">
			       
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-facebook-official" aria-hidden="true"></i>
					Facebook Login</a>
			     
			      </div>
			      <div class="row login_buttons">
			  
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-google-plus" aria-hidden="true"></i>
						Google+ Login</a>
			
			      </div>
			      <div class="row login_buttons">
			    
			          <a class="right-align waves-effect waves-light btn">
			          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
						LinkedIn Login</a>
			
			      </div>
			    </form>
			  </div>
		</div>
	</div>
	<?php include('components/footer.php') ?>
</body>

	<?php include('components/js.php') ?>
</html>