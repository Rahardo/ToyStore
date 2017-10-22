<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class View_test extends TestCase
{
	public function test_home_index()
	{
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_session()
	{
                $_SESSION['admin'] = "admin";
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        
	public function test_singleProduct()
	{
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_index_session()
	{
                $_SESSION['admin'] = "admin";
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
              
	public function test_home_admin_nosession()
	{
		$output = $this->request('GET', 'home/admin');
		$this->assertRedirect('user_authentication/index');
	}
        
        public function test_home_admin_session_admin()
	{
                $_SESSION['admin'] = "admin";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h1> PRODUCT LIST </h1>', $output);
	}
        
        public function test_home_admin_session_nonadmin()
	{
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'home/admin');
		$this->assertRedirect('user_authentication/index');
        }
               
        
        public function test_home_adminadd_nosession()
	{
                $output = $this->request('GET', 'home/adminadd');
		$this->assertRedirect('user_authentication/index');
	}
        
        public function test_home_adminadd_session_admin()
	{
                $_SESSION['admin'] = "admin";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
        
        public function test_home_adminadd_session_nonadmin()
	{
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertRedirect('user_authentication/index');
	}
        
        
        public function test_home_adminedit_nosession()
	{
		$output = $this->request('GET', 'home/adminedit/1');
		$this->assertRedirect('user_authentication/index');
	}
        
        public function test_home_adminedit_session_admin()
	{
                $_SESSION['admin'] = "admin";
		$output = $this->request('GET', 'home/adminedit/1');
		$this->assertContains('<span style="width: 70px;">Product Category</span>', $output);
	}
        
        public function test_home_adminedit_session_nonadmin()
	{
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'home/adminedit/1');
		$this->assertRedirect('user_authentication/index');
	}
               
        
        public function test_userAuthentic_index_nosession()
	{
                $output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
        public function test_userAuthentic_index_session_admin()
	{
                $_SESSION['admin'] = "admin";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertRedirect('home/index');
	}
        
        public function test_userAuthentic_index_session_nonadmin()
	{
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertRedirect('home/index');
	}
                       
        
        public function test_userAuthentic_registration_nosession()
	{
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
        public function test_userAuthentic_registration_session_admin()
	{
                $_SESSION['admin'] = "admin";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertRedirect('home/index' );
	}
        
        public function test_userAuthentic_registration_session_nonadmin()
	{
                $_SESSION['logged_in'] = "arda";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertRedirect('home/index' );
	}
}
