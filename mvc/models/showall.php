<?php
Class Showall
{
    function get_topmovies()
    {
        $query = "select * from movies order by release_date"; 
        $DB= new Database();
        $data=$DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}