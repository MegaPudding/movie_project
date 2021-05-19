<?php
Class Sortall
{
    function get_sortmovies($file)
    {
        $query = "select * from movies order by $file"; 
        $DB= new Database();
        $data=$DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}