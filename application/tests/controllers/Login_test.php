<?php

class Login_test extends TestCase
{
    public function test_user_login_process_tolakSessionUser(){
        $_SESSION['logged_in'] = "arda";
        $output = $this->request('GET', 'user_authentication/user_login_process');
        $this->assertRedirect('home/index');
    }

    public function test_user_login_process_tolakSessionAdmin(){
        $_SESSION['admin'] = "admin";
        $output = $this->request('GET', 'user_authentication/user_login_process');
        $this->assertRedirect('home/index');
    }

    public function test_user_login_process_masukAdmin(){
        $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'admin',
            'password' => 'admin',
            ]);
        $this->assertRedirect('home/admin');
        $this->assertEquals('admin', $_SESSION['admin']);
    }

    public function test_user_login_process_masukUser(){
        $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'arda',
            'password' => 'arda',
            ]);
        $this->assertRedirect('home/index');
        $this->assertEquals('arda', $_SESSION['logged_in']['username']);
    }

    public function test_user_login_process_nousername(){
        $output = $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => '',
            'password' => 'arda'
            ]);
        $this->assertContains('<title>Login Form</title>', $output);
        $this->assertEquals('', $_SESSION['username']);
        $this->assertEquals('', $_SESSION['status']);
    }

    public function test_user_login_process_nopassword(){
        $output = $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'arda',
            'password' => ''
            ]);
        $this->assertContains('<title>Login Form</title>', $output);
        $this->assertEquals('', $_SESSION['username']);
        $this->assertEquals('', $_SESSION['status']);
    }

    public function test_user_login_process_usernameunmatch(){
       $output = $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'ardawardaya',
            'Upassword' => 'arda',
            ]);
        $this->assertContains('<title>Login Form</title>', $output);

        $this->assertEquals('', $_SESSION['username']);
        $this->assertEquals('', $_SESSION['status']);
    }

    public function test_user_login_process_passwordunmatch(){
      $output = $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'arda',
            'password' => 'ardawardaya',
            ]);
        $this->assertContains('<title>Login Form</title>', $output);

        $this->assertEquals('', $_SESSION['username']);
        $this->assertEquals('', $_SESSION['status']);
    }

    public function test_user_login_process_usernamepasswordunmatch(){
      $output = $this->request('POST', 'user_authentication/user_login_process',
            [
            'username' => 'qweqweqw',
            'password' => 'qweqweqwe',
            ]);
        $this->assertContains('<title>Login Form</title>', $output);

        $this->assertEquals('', $_SESSION['username']);
        $this->assertEquals('', $_SESSION['password']);
    }

    public function test_logout(){
            $_SESSION['logged_in'] = "logged_in";
            $_SESSION['admin'] = "admin";
            $this->request('GET', 'user_authentication/logout');
            $this->assertRedirect('home/index');
    }
        
}