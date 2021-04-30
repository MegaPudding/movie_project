<?php
Class Home extends Controller {
	function index(){
		$data['page_title'] = "Home";
		$moviehome = $this->loadModel("moviehome");
		$result = $moviehome->get_topmovies();
		$data['moviehome']=$result;
		$this->view("home",$data);
	}
}