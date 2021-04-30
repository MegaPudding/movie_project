<html>
	<head>
		<title>Add Movie</title>
		<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/movieadd.css">
		
	</head>
	<body>
			<div class="top_bar">
		<div class="sitename">
			<a href="home.php">Movie Review</a>
		</div>		
	</div>
		<div class= "moviebg">
			<div class="box">
			<div class= "head">
				<h1>Add your favourite movie</h1>
		    </div>
				<form method="post" enctype="multipart/form-data">
					<label> Movie Name: </label><br>
					<input type="text" name="name"/><br>
					<label> Rating: </label><br>
					<input type="text" name="rating"/><br>
					<label> Release Date: </label><br>
					<input type="text" name="release_date"/><br>					
					<label> Plot: </label><br>
					<input type="text" name="plot"/><br>
					<label> Poster Image: </label>
					<input type="file" name="file" id="image"/></br>
					<input type="submit" name="submit1" value="Submit"><br>
					<p><?php check_message() ?></p>
				</form>
			</div>
		</div>	
	</body>
</html>