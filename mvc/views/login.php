<html lang="en">
  <head>
      <title>Welcome</title>
	  <link type="text/css" rel="stylesheet" href="<?=ASSETS?>css/login_style.css"/>
	  
	  
  </head>

  <body> 
    <div class="back">
		<div class="login_box">
			
			<div class ="login_header">
			<h1>User Login</h1>
			</div>
		
			<form class="form_design" method="post">
			
				Username: <input type="text" name="user_id"> <br/>
				Password : <input type="password" name="password">  <br/>
				<input type="submit" value="Log In">
				<p><?php check_message() ?></p>
			</form>
		</div>
	</div>
  </body> 
</html>
