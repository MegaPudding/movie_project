<?php

namespace App\Models;

class User
{
	public $user_name;

	public $last_name;

	public $email;

	public $password;


	public function setUserName($username)
	{
		$this->user_name = $username;

	}

	public function getUserName()
	{
		return $this->user_name;
	}


	public function setPassword($password)
	{
		$this->password = $password;

	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}


	public function getEmailVariables()
	{
		return [
			'user_name' => $this->getUserName(),
			'email' => $this->getEmail(),
		];
	}
	public function login($username, $pass){
       
            $this->username = $username;
            $this->pass = $pass;


            if(!empty($this->username)){


                if($this->getPassword() === $this->pass ){

                     return 'Valid Login';
                }
                else{
                    return 'Invalid password';
                }

            }
            else{
                return 'Enter User Name';
            }

    
    }
}