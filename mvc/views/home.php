<html>
<head>
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap/js"></script>
	<script src="css/bootstrap/js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/style1.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/img.css">
</head>
<body>
	<div class="top_bar">
		<div class="sitename">
			<a href="home.php">Movie Review</a>
		</div>
		<nav>
			<a href="<?=ROOT?>login">
				<i class="fa fa-sign-in fa-lg"></i>LogIn 
			</a>
			
                    <a href="<?=ROOT?>movieadd">
                    Add Movie
                    </a>
           
   			 <a href="<?=ROOT?>allmovies">
            	<i class=""></i>All Movies
   			 </a>
   			 <a href="<?=ROOT?>search">
            	<i class=""></iSearch
   			 </a>
		</nav>
	</div>
	
    <h2 style="text-align:center;"> Latest Movies </h2>
  
    <?php if(is_array($data['moviehome'])): ?>
    <?php foreach(($data['moviehome']) as $row): ?>
    <div class="feature">
    <div class="col-md-2">
                <div class="image">
                   <img class="img" src="<?=ROOT. $row->image?>" width="250px" height="275px" alt=""/>
                <div class="overlay">
                      <h4><?=$row->name?></h4>
                      <p class="description"><?=$row->rating?></p>
                </div>
            </div> 

        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <br>
</body>
</html>