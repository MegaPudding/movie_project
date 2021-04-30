<html>
<head>
	<title>All Movies</title>
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
			<a href="<?=ROOT?>sortbyrating">
				<i class="fa fa-sign-in fa-lg"></i>Sort By Rating
			</a>
			<a href="<?=ROOT?>sortbyname">
            	<i class="fas fa-film"></i>Sort By Name
   			 </a>
		</nav>
	</div>
	<div class="ft">
    <h2 > All Movies </h2>
    </div>
    <?php if(is_array($data['showall'])): ?>
    <?php foreach(($data['showall']) as $row): ?>
    <div class="feature">
    <div class="col-md-3">
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