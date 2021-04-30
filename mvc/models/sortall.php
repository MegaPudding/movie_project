<?php
Class Sortall
{
    function get_sortmovies($sort)
    {
        $query = "select * from movies order by $sort"; 
        $DB= new Database();
        $data=$DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}