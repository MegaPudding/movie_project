<?php
class Search extends Controller
{
    function index()
    {
        if(isset($_POST['name']))
          {
              $searchmovie = $this->loadModel("searchmovie");
              $result = $searchmovie->get_movie();
              $data['searchmovie']=$result;
            }
            $this->view("search",$data);
    }

}