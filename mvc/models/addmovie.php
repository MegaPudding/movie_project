<?php
Class Addmovie
{
    function movieadd($POST,$FILES)
    {
        $DB = new Database();
        $_SESSION['error']="";
        $allowed[]="image/jpeg";
        $allowed[]="image/jpg";
        if(isset($POST['name']) && isset($FILES['file']))
        {
            if($FILES['file']['name']!="" && $FILES['file']['error']==0 && in_array($FILES['file']['type'],$allowed))
            {
                $folder="upload/";
                $destination= $folder. $FILES['file']['name']; 
                move_uploaded_file($FILES['file']['tmp_name'], $destination);
            }else
            {
                $_SESSION['error']="Details Can not be sent";
            }
            if($_SESSION['error']=="")
            {
                $arr['name']=$POST['name'];
                $arr['rating']=$POST['rating'];
                $arr['release_date']=$POST['release_date'];
                $arr['plot']=$POST['plot'];
                $arr['image']=$destination;
                show($arr);
                $name ="INSERT INTO movies (name,rating,release_date,plot,image) VALUES (:name,:rating,:release_date,:plot,:image);";
                $data = $DB->write($name,$arr);
                if($data)
                {
                    $_SESSION['error']="Movie added to database";
                    header("Location:". ROOT . "movieadd");
                    die;
                }else{
                    $_SESSION['error']="Movie is aleady in database";
                    header("Location:". ROOT . "movieadd");
                    die;
                }
            }
        }
    }
}