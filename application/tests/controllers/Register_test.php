<?php

class Register_test extends TestCase
{
    
    public function test_userAuthentication_new_user_registration()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => '2',
                                    'email_value' => '1@1',
                                    'password' => '2'
				]
		);
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
    public function test_userAuthentication_new_user_registration_alreadyExist()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => 'rahardo',
                                    'email_value' => 'rahardoo@rahardo',
                                    'password' => 'rahardo'
				]
		);
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
    public function test_userAuthentication_new_user_registration_null()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => '',
                                    'email_value' => '',
                                    'password' => ''
				]
		);
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
        
    public function test_userAuthentication_new_user_registration_Username_null()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => '',
                                    'email_value' => 'ise@ise',
                                    'password' => 'ise'
				]
		);
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
     public function test_userAuthentication_new_user_registration_email_value_null()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => 'ise',
                                    'email_value' => '',
                                    'password' => 'ise'
				]
		);
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
    public function test_userAuthentication_new_user_registration_password_null()
	{	
		$output = $this->request(
			'POST',
			'user_authentication/new_user_registration',
				[
                                    'username' => 'ise',
                                    'email_value' => 'ise@ise',
                                    'password' => ''
				]
		);
		$this->assertContains('<title>Registration Form</title>', $output);
	}
}

?>