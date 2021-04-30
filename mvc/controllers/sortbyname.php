<?php
class Sortbyname extends Controller
{
    function index(){
    $data['page_title'] = "Allmovies";
    $sortall = $this->loadModel("sortall");
    $result = $sortall->get_sortmovies('name');
    $data['sortall']=$result;
    $this->view("sortallmovies",$data);
  }
}