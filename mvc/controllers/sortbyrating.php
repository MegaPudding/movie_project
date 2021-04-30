<?php
class Sortbyrating extends Controller
{
    function index(){
    $data['page_title'] = "Allmovies";
    $sortall = $this->loadModel("sortall");
    $result = $sortall->get_sortmovies('rating DESC');
    $data['sortall']=$result;
    $this->view("sortallmovies",$data);
  }
}