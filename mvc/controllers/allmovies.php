<?php
class Allmovies extends Controller
{
    function index(){
    $data['page_title'] = "Allmovies";
    $showall = $this->loadModel("showall");
    $result = $showall->get_topmovies();
    $data['showall']=$result;
    $this->view("allmovies",$data);
  }
}