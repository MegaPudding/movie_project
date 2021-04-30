<?php 

Class Controller
{

	protected function view($view,$data = [])
	{
		if(file_exists("../mvc/views/". $view .".php"))
 		{
 			include "../mvc/views/". $view .".php";
 		}else{
 			include "../mvc/views/404.php";
 		}
	}

	protected function loadModel($model)
	{
		if(file_exists("../mvc/models/". $model .".php"))
 		{
 			include "../mvc/models/". $model .".php";
 			return $model = new $model();
 		}

 		return false;
	}


}