<?php
Class Searchmovie
{
    function get_movie()
    {

        $query = "select * from movies order by release_date DESC limit 6"; 
        $DB= new Database();
        $data=$DB->read($query);
        if(is_array($data))
        {


            return $data;
        }
        return false;
    }
}