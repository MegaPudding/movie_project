<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

public function setUp() :void {

		$this->user = new \App\Models\User;
		
	}


	public function testUserName()
	{
		$this->user->setUserName('sadaf');

		$this->assertEquals($this->user->getUserName(), 'sadaf');
	}

	public function testPassword()
	{
		$this->user->setPassword('123456');

		$this->assertEquals($this->user->getPassword(), '123456');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('sadaf@gmail');

		$this->assertEquals($user->getEmail(), 'sadaf@gmail');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setUserName('sadaf');

		$user->setEmail('sadaf@gmail');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('user_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['user_name'], 'sadaf');
		$this->assertEquals($emailVariables['email'], 'sadaf@gmail');
	}

public function testLogin()
    {
        $user = new \App\Models\User;
        $username = 'nazia';
        $pass = '1234';
        $user->setUserName('nazia');
        $user->setPassword('1234');
        $this->assertEquals($user->login($username, $pass), 'Valid Login');

    }
		
		
	
}